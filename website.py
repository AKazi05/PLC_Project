from functools import wraps
import secrets
from flask import Blueprint, flash, redirect, render_template, request, session, url_for
from sqlalchemy import func
from werkzeug.security import generate_password_hash, check_password_hash
from __init__ import db
from models import *

website = Blueprint('website',__name__)

def login_is_required(func):
    @wraps(func) # uses original function name
    def function(*args, **kwargs):
        if 'logged_in' not in session: # if no logged_in stored in session, user must not have logged in, so redirect
            return redirect(url_for('website.login'))
        else:
            return func(*args, **kwargs) # return original function
    return function

@website.route('/signup', methods=['GET', 'POST'])
def signup():
    if request.method == 'POST': # if user presses signup
        form = request.form
        if 'username' in form:
            username = form.get('username')
            password = form.get('password')  
            key_phrase = form.get('key_phrase') 
            
            user = User.query.filter_by(username=username).first() # filter by first username, just in case
            if user:
                flash('Username taken.', category='error')
                return render_template('signup.html')
            elif len(username) < 2:
                flash('Username must be greater than 1 character.', category='error')
                return render_template('signup.html')
            elif len(password) < 6:
                flash('Password must be at least 5 characters.', category='error')
                return render_template('signup.html')
            else:
                new_user = User(username=username, password=generate_password_hash(password, method='scrypt'), key_phrase=generate_password_hash(key_phrase, method='scrypt'))
                try:
                    db.session.add(new_user)
                    db.session.commit()
                    flash('Account created!', category='success')
                    return redirect(url_for('website.login'))
                except Exception as e:
                    flash(f'Error creating account: {str(e)}', category='error')
                    return render_template('signup.html')
                     
    return render_template('signup.html')

@website.route('/login', methods=['GET', 'POST'])
def login():
    if request.method == 'POST':
        form = request.form
        username = form.get('username')
        password = form.get('password') 
    
        user = User.query.filter_by(username=username).first() # filter by first username, just in case
        try:
            if user: # check if user exists
                if check_password_hash(user.password, password): # is user input matches PW in DB, let them login
                    session['logged_in'] = True
                    session['username'] = username
                    return redirect(url_for('website.index'))
                else:
                    flash('Incorrect password. Hint: passwords are greater than 5 characters.', category='error')
                    return render_template('login.html')
            else:
                flash('User does not exist.', category='error')
                return render_template('login.html')
        except:
            return render_template('login.html')
        
    return render_template('login.html')

@website.route("/logout")
def logout():
    session.clear()
    return redirect(url_for('website.login'))

@website.route('/')
@login_is_required
def index():
    return render_template('index.html')

@website.route('/forgot', methods=['GET', 'POST'])
def forgot():
    if request.method == 'POST':
        username = request.form.get('username')
        key_phrase = request.form.get('key_phrase')
        user = User.query.filter_by(username=username).first() # filter by first username, just in case
        
        if user:
            if check_password_hash(user.key_phrase, key_phrase): # check user input with hash on db
                token = secrets.token_urlsafe(16) # generate url safe token
                user.token = token
                db.session.commit()
                return redirect(url_for('website.reset', username=username, token=token))
            else: 
                flash('Incorrect key phrase.', category='error')
        else:
            flash('Username not found. Please try again.', category='error')
    return render_template('forgot.html')

@website.route('/reset/<username>/<token>', methods=['GET', 'POST'])
def reset(username, token):
    user = User.query.filter_by(username=username, token=token).first()
    if not user:
        return redirect(url_for('website.login'))

    if request.method == 'POST':
        new_password = request.form.get('password')
        if len(new_password) < 6:
            flash('Password must be at least 5 characters.', category='error')
        elif check_password_hash(user.password, new_password):
            flash('Password cannot be the same as previous password.', category='error')            
        else:
            flash('Password reset!', category='success')
            user.password = generate_password_hash(new_password, method='scrypt')
            user.token = None
            db.session.commit()
            return redirect(url_for('website.login'),)
    return render_template('reset.html')

def add_workout(form):
    exercise = form.get('exercise')
    calories = form.get('calories_burned')
    user = User.query.filter_by(username=session["username"]).first()
    try:
        new_workout = Workout(exercise=exercise, calories=calories, username=user.username) # create new workout table for each instance
        db.session.add(new_workout)
        db.session.commit() # save
        flash("Added workout!", category='success')
    except Exception as e:
        flash("Error adding workout.", category='error')
        
def get_total_calories(username):
    user = User.query.filter_by(username=username).first()
    if user:
        total_calories = db.session.query(func.sum(Workout.calories)).filter_by(username=username).scalar()
        return total_calories
    return 0 
 
@website.route('/workout', methods=['GET', 'POST'])
@login_is_required       
def workout():
    user = User.query.filter_by(username=session["username"]).first()
    workout = Workout.query.filter_by(username=user.username).all() # all workouts linked with this specific username
    total_calories = 0
    total_calories = get_total_calories(session["username"])
    if request.method == 'POST': # will post when user presses delete
        workout_id = request.form.get('workout_id') # get the specific workout's id to be deleted
        workout_id_to_delete = Workout.query.get(workout_id)
        try:
            db.session.delete(workout_id_to_delete)
            db.session.commit() # save
            flash("Workout deleted successfully.", category='success')
            return redirect(url_for('website.workout'))
        except Exception as e:
            db.session.rollback() # return to previous state of DB as failsafe
            flash("Error deleting workout.", category='error')
        return redirect(url_for('website.workout'))
    return render_template('workout.html', user=user, workouts=workout, total_calories=total_calories)

@website.route('/mynutrition', methods=['GET', 'POST'])
@login_is_required
def my_nutrition():
    return render_template('my_nutrition.html')

# PAGES     |
# FOR       |
# ALL       |
# MUSCLES   v
   
@website.route('/bicep', methods=['GET', 'POST'])
@login_is_required
def bicep():
    if request.method == 'POST': # will post when user add workout
        try:
            add_workout(request.form)
        except:
            return redirect(url_for('website.index'))
    return render_template('bicep.html')

@website.route('/forearm', methods=['GET', 'POST'])
@login_is_required
def forearm():
    if request.method == 'POST': # will post when user add workout
        try:
            add_workout(request.form)
        except:
            return redirect(url_for('website.index'))
    return render_template('forearm.html')

@website.route('/front_deltoid', methods=['GET', 'POST'])
@login_is_required
def front_deltoid():
    if request.method == 'POST': # will post when user add workout
        try:
            add_workout(request.form)
        except:
            return redirect(url_for('website.index'))
    return render_template('front_deltoid.html')

@website.route('/pectoral', methods=['GET', 'POST'])
@login_is_required
def pectoral():
    if request.method == 'POST': # will post when user add workout
        try:
            add_workout(request.form)
        except:
            return redirect(url_for('website.index'))
    return render_template('pectoral.html')

@website.route('/abdominal', methods=['GET', 'POST'])
@login_is_required
def abdominal():
    if request.method == 'POST': # will post when user add workout
        try:
            add_workout(request.form)
        except:
            return redirect(url_for('website.index'))
    return render_template('abdominal.html')

@website.route('/quadricep', methods=['GET', 'POST'])
@login_is_required
def quadricep():
    if request.method == 'POST': # will post when user add workout
        try:
            add_workout(request.form)
        except:
            return redirect(url_for('website.index'))
    return render_template('quadricep.html')

@website.route('/tibialis_anterior', methods=['GET', 'POST'])
@login_is_required
def tibialis_anterior():
    if request.method == 'POST': # will post when user add workout
        try:
            add_workout(request.form)
        except:
            return redirect(url_for('website.index'))
    return render_template('tibialis_anterior.html')

@website.route('/tibialis_posterior', methods=['GET', 'POST'])
@login_is_required
def tibialis_posterior():
    if request.method == 'POST': # will post when user add workout
        try:
            add_workout(request.form)
        except:
            return redirect(url_for('website.index'))
    return render_template('tibialis_posterior.html')

@website.route('/hip_flexor', methods=['GET', 'POST'])
@login_is_required
def hip_flexor():
    if request.method == 'POST': # will post when user add workout
        try:
            add_workout(request.form)
        except:
            return redirect(url_for('website.index'))
    return render_template('hip_flexor.html')

@website.route('/upper_trapezius', methods=['GET', 'POST'])
@login_is_required
def upper_trapezius():
    if request.method == 'POST': # will post when user add workout
        try:
            add_workout(request.form)
        except:
            return redirect(url_for('website.index'))
    return render_template('upper_trapezius.html')

@website.route('/lower_trapezius', methods=['GET', 'POST'])
@login_is_required
def lower_trapezius():
    if request.method == 'POST': # will post when user add workout
        try:
            add_workout(request.form)
        except:
            return redirect(url_for('website.index'))
    return render_template('lower_trapezius.html')

@website.route('/latissimus_dorsi', methods=['GET', 'POST'])
@login_is_required
def latissimus_dorsi():
    if request.method == 'POST': # will post when user add workout
        try:
            add_workout(request.form)
        except:
            return redirect(url_for('website.index'))
    return render_template('latissimus_dorsi.html')

@website.route('/tricep', methods=['GET', 'POST'])
@login_is_required
def tricep():
    if request.method == 'POST': # will post when user add workout
        try:
            add_workout(request.form)
        except:
            return redirect(url_for('website.index'))
    return render_template('tricep.html')

@website.route('/gluteus_maximus', methods=['GET', 'POST'])
@login_is_required
def gluteus_maximus():
    if request.method == 'POST': # will post when user add workout
        try:
            add_workout(request.form)
        except:
            return redirect(url_for('website.index'))
    return render_template('gluteus_maximus.html')

@website.route('/calf', methods=['GET', 'POST'])
@login_is_required
def calf():
    if request.method == 'POST': # will post when user add workout
        try:
            add_workout(request.form)
        except:
            return redirect(url_for('website.index'))
    return render_template('calf.html')

@website.route('/hamstrings', methods=['GET', 'POST'])
@login_is_required
def hamstrings():
    if request.method == 'POST': # will post when user add workout
        try:
            add_workout(request.form)
        except:
            return redirect(url_for('website.index'))
    return render_template('hamstrings.html')

@website.route('/mid_trapezius', methods=['GET', 'POST'])
@login_is_required
def mid_trapezius():
    if request.method == 'POST': # will post when user add workout
        try:
            add_workout(request.form)
        except:
            return redirect(url_for('website.index'))
    return render_template('mid_trapezius.html')

@website.route('/rear_deltoid', methods=['GET', 'POST'])
@login_is_required
def rear_deltoid():
    if request.method == 'POST': # will post when user add workout
        try:
            add_workout(request.form)
        except:
            return redirect(url_for('website.index'))
    return render_template('rear_deltoid.html')
    
@website.route('/infra_spinatus', methods=['GET', 'POST'])
@login_is_required
def infra_spinatus():
    if request.method == 'POST': # will post when user add workout
        try:
            add_workout(request.form)
        except:
            return redirect(url_for('website.index'))
    return render_template('infra_spinatus.html')
    
@website.route('/terres_major', methods=['GET', 'POST'])
@login_is_required
def terres_major():
    if request.method == 'POST': # will post when user add workout
        try:
            add_workout(request.form)
        except:
            return redirect(url_for('website.index'))
    return render_template('terres_major.html')
    
@website.route('/oblique', methods=['GET', 'POST'])
@login_is_required
def oblique():
    if request.method == 'POST': # will post when user add workout
        try:
            add_workout(request.form)
        except:
            return redirect(url_for('website.index'))
    return render_template('oblique.html')