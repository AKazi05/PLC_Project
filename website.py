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
                        return redirect("/main")
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

@website.route('/main')
@login_is_required
def index():
    return render_template('main.html')