from flask_login import UserMixin
from flask_sqlalchemy import SQLAlchemy

db = SQLAlchemy()
DB_NAME = "database.db"

class Workout(db.Model, UserMixin):
    id = db.Column(db.Integer, primary_key=True)
    exercise = db.Column(db.String(100))
    calories = db.Column(db.Integer)
    username = db.Column(db.String(256), db.ForeignKey('user.username'))  # references 'username' in 'User' table
    user = db.relationship('User', backref=db.backref('workouts', lazy=True))
    
class User(db.Model, UserMixin):
    id = db.Column(db.Integer, primary_key=True)
    username = db.Column(db.String(320), unique=True, nullable=False)
    password = db.Column(db.String(64), nullable=False)
    key_phrase = db.Column(db.String(64), nullable=False)
    token = db.Column(db.String(64), nullable=True)
