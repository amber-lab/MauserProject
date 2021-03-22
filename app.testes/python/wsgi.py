from flask import Flask
app = Flask(__name__)

@app.route('/')
def hello_world():
    return {'name' : 'Leo', 'age' : 24, 'city' : 'Valpaços'}

@app.route('/test/')
def testme():
	return "PASS"
