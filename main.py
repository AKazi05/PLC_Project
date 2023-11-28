from functools import wraps
from os import path
import os
from flask import Flask, abort, flash, redirect, render_template, request, session, url_for
from flask_login import UserMixin
from flask_sqlalchemy import SQLAlchemy
from werkzeug.security import generate_password_hash, check_password_hash

db = SQLAlchemy()
DB_NAME = "database.db"


class User(db.Model, UserMixin):
    id = db.Column(db.Integer, primary_key=True)
    username = db.Column(db.String(320), unique=True, nullable=False)
    password = db.Column(db.String(64), nullable=False)
    
def create_app():
    app = Flask(__name__)
    app.config['SECRET_KEY'] = 'secret'
    app.config['SQLALCHEMY_DATABASE_URI'] = f'sqlite:///{DB_NAME}'
    db.init_app(app)

    with app.app_context():
        db.create_all()
        
    return app

app = create_app()

def login_is_required(func):
    @wraps(func)
    def function(*args, **kwargs):
        if 'logged_in' not in session:
            return redirect(url_for('log_in'))
        else:
            return func(*args, **kwargs)
    return function

@app.route('/signup', methods=['GET', 'POST'])
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

@app.route('/', methods=['GET', 'POST'])
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

@app.route("/logout")
def logout():
    session.clear()
    return redirect('/')

@app.route('/main')
@login_is_required
def index():
    return render_template('main.html')

if __name__ == '__main__':
    app.run(debug=True)