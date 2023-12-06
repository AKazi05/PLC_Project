from functools import wraps
from flask import Blueprint, Flask, flash, redirect, render_template, request, session, url_for
from werkzeug.security import generate_password_hash, check_password_hash
from __init__ import db
from models import *

website = Blueprint('website',__name__)

def login_is_required(func):
    @wraps(func)
    def function(*args, **kwargs):
        if 'logged_in' not in session:
            return redirect(url_for('log_in'))
        else:
            return func(*args, **kwargs)
    return function

@website.route('/signup', methods=['GET', 'POST'])
def sign_up():
    if request.method == 'POST':
        form = request.form
        if 'username' in form:
            username = form.get('username')
            password = form.get('password')  
            
            user = User.query.filter_by(username=username).first()
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
                new_user = User(username=username, password=generate_password_hash(password, method='scrypt'))
                try:
                    db.session.add(new_user)
                    db.session.commit()
                    flash('Account created!', category='success')
                    return redirect('/')
                except Exception as e:
                    flash(f'Error creating account: {str(e)}', category='error')
                    return render_template('signup.html')
                     
    return render_template('signup.html')

@website.route('/', methods=['GET', 'POST'])
def log_in():
    if request.method == 'POST':
        form = request.form
        if 'username' in form:
            username = form.get('username')
            password = form.get('password') 
        
            user = User.query.filter_by(username=username).first()
            try:
                if user:
                    if check_password_hash(user.password, password):
                        # flash('Signed in! Redirecting...', category='success')
                        session['logged_in'] = True
                        return redirect("/home")
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
    return redirect('/')

@website.route('/home')
@login_is_required
def index():
    return render_template('index.html')

@website.route('/bicep')
@login_is_required
def bicep():
    return render_template('bicep.html')

@website.route('/forearm')
@login_is_required
def forearm():
    return render_template('forearm.html')

@website.route('/front_deltoid')
@login_is_required
def front_deltoid():
    return render_template('front_deltoid.html')

@website.route('/pectoral')
@login_is_required
def pectoral():
    return render_template('pectoral.html')

@website.route('/abdominal')
@login_is_required
def abdominal():
    return render_template('abdominal.html')

@website.route('/quadricep')
@login_is_required
def quadricep():
    return render_template('quadricep.html')

@website.route('/tibialis_anterior')
@login_is_required
def tibialis_anterior():
    return render_template('tibialis_anterior.html')

@website.route('/tibialis_posterior')
@login_is_required
def tibialis_posterior():
    return render_template('tibialis_posterior.html')

@website.route('/hip_flexor')
@login_is_required
def hip_flexor():
    return render_template('hip_flexor.html')

@website.route('/upper_trapezius')
@login_is_required
def upper_trapezius():
    return render_template('upper_trapezius.html')

@website.route('/lower_trapezius')
@login_is_required
def lower_trapezius():
    return render_template('lower_trapezius.html')

@website.route('/latissimus_dorsi')
@login_is_required
def latissimus_dorsi():
    return render_template('latissimus_dorsi.html')

@website.route('/tricep')
@login_is_required
def tricep():
    return render_template('tricep.html')

@website.route('/gluteus_maximus')
@login_is_required
def gluteus_maximus():
    return render_template('gluteus_maximus.html')

@website.route('/calf')
@login_is_required
def calf():
    return render_template('calf.html')

@website.route('/hamstrings')
@login_is_required
def hamstrings():
    return render_template('hamstrings.html')

@website.route('/mid_trapezius')
@login_is_required
def mid_trapezius():
    return render_template('mid_trapezius.html')

@website.route('/rear_deltoid')
@login_is_required
def rear_deltoid():
    return render_template('rear_deltoid.html')

@website.route('/infra_spinatus')
@login_is_required
def infra_spinatus():
    return render_template('infra_spinatus.html')

@website.route('/terres_major')
@login_is_required
def terres_major():
    return render_template('terres_major.html')

@website.route('/oblique')
@login_is_required
def oblique():
    return render_template('oblique.html')