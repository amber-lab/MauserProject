# Ferramentas
	- Flask: WSGI

# Termos
	- WSGI: Web Server Gateway Interface

## Flask
Servidor HTTP para partilha de informações normalmente em JSON ou XML.

### Configuration
$ export FLASK_APP='wsgi.py'

### Running Server
$ flask run
$ python -m flask run

### Externally Visible Server
$ flask run --host=0.0.0.0

### Debug Mode
'''
$ export FLASK_ENV=development
$ flask run
'''
OR
'''
$ export FLASK_DEBUG=1
'''
### Routing
'''python
@app.route('/')
def index():
	return 'Index Page'
'''
### Variable Rules
Its possible to mark sections with variable name.\
Use <variable-name> to define the variable and use it as a parameter variable in code.\
Use <type:variable-name> to define the type of the variable name.\

'''python
@app.route('/user/<username>')
def show_user_profile(username):
	return 'User %s' % escape(username)
'''
##### Variable types
- string = any text without a slash
- int    = accepts positive integers
- float  = accepts positivefloating point values
- path   = like string but also accepts slashes
- uuid	 = accepts UUID strings

### URL Building
To build a URL to a specific function, user the url_for() function.\
app.test_request_context() is used to handle a request even while used in a Python shell.\
url_for(function_name, kwargs).
#### Example

'''python
from flask import Flask, url_for
from markupsage import escape

app = Flask(__name__)

@app.route('/')
def index():
	return 'index'

@app.route('/login')
def login():
	return 'login'

@app.route('/user/<username>')
def profile(username):
	return "{}\'s profile".format(escape(username))

with app.test_request_context():
	print(url_for('index'))
	print(url_for('login'))
	print(url_for('login', next('/'))
	print(url_for('profile', username='John Doe'))
'''

