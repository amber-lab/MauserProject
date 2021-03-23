import requests

file = open('/home/labdesktop/Desktop/ContratoMouser/papelada', 'r')
json_return = {'file' : file}
req = requests.post('http://192.168.1.9:5000/upload', json=json_return)
print("\nstatus:",req.text)
print("\njson:", req.json)