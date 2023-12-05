from flask import Flask
from models import *

def create_app():
    app = Flask(__name__)
    app.config['SECRET_KEY'] = 'secret'
    app.config['SQLALCHEMY_DATABASE_URI'] = f'sqlite:///{DB_NAME}'
    db.init_app(app)

    from website import website
    app.register_blueprint(website, url_prefix='/')
    
    with app.app_context():
        db.create_all()
        
    return app