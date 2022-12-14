#-*- coding:utf-8 -*-



'''
1.以指定函数作为target来创建新进程:
'''


import multiprocessing
import os

#定义一个普通的action函数，该函数准备作为进程执行体
def action(max):
	for i in range(max):
		print("(%s)子进程(父进程:(%s)):%d" %(os.getpid(),os.getpid(),i))


if __name__ == '__main__':
	#下面是主程序(也就是主进程)
	for i in range(100):
		print("%s主进程:%d" % (os.getpid(),i))
		if i == 20:
			#创建并启动第一个进程
			mp1 = multiprocessing.Process(target=action,args=(100,))
			mp1.start()
			#创建并启动第二个进程
			mp2 = multiprocessing.Process(target=action,args=(100,))
			mp2.start()
			mp2.join()
	print('主线程执行完成!')



'''
上面程序中代码:
mp1 = multiprocessing.Process(target=action,args=(100,))
mp1.start()
就是程序创建并启动新进程的关键代码，不难发现这两行代码和创建并启动新线程
的代码几乎一样，只是此处创建的是multiprocessing.Process对象。

需要说明的是，通过multiprocessing.Process来创建并启动进程时，程序必须要先判断
if __name__ == '__main__':,否则可能会引发异常。

运行上面程序可以看到三个进程，一个主进程和两个子进程。

程序输出结果:
18716主进程:0
18716主进程:1
18716主进程:2
18716主进程:3
18716主进程:4
18716主进程:5
18716主进程:6
18716主进程:7
18716主进程:8
18716主进程:9
18716主进程:10
18716主进程:11
18716主进程:12
18716主进程:13
18716主进程:14
18716主进程:15
18716主进程:16
18716主进程:17
18716主进程:18
18716主进程:19
18716主进程:20
(18717)子进程(父进程:(18717)):0
(18717)子进程(父进程:(18717)):1
(18717)子进程(父进程:(18717)):2
(18717)子进程(父进程:(18717)):3
(18717)子进程(父进程:(18717)):4
(18717)子进程(父进程:(18717)):5
(18717)子进程(父进程:(18717)):6
(18717)子进程(父进程:(18717)):7
(18717)子进程(父进程:(18717)):8
(18717)子进程(父进程:(18717)):9
(18717)子进程(父进程:(18717)):10
(18717)子进程(父进程:(18717)):11
(18717)子进程(父进程:(18717)):12
(18717)子进程(父进程:(18717)):13
(18717)子进程(父进程:(18717)):14
(18717)子进程(父进程:(18717)):15
(18717)子进程(父进程:(18717)):16
(18717)子进程(父进程:(18717)):17
(18717)子进程(父进程:(18717)):18
(18717)子进程(父进程:(18717)):19
(18717)子进程(父进程:(18717)):20
(18717)子进程(父进程:(18717)):21
(18717)子进程(父进程:(18717)):22
(18717)子进程(父进程:(18717)):23
(18717)子进程(父进程:(18717)):24
(18717)子进程(父进程:(18717)):25
(18717)子进程(父进程:(18717)):26
(18717)子进程(父进程:(18717)):27
(18717)子进程(父进程:(18717)):28
(18717)子进程(父进程:(18717)):29
(18717)子进程(父进程:(18717)):30
(18717)子进程(父进程:(18717)):31
(18717)子进程(父进程:(18717)):32
(18717)子进程(父进程:(18717)):33
(18717)子进程(父进程:(18717)):34
(18717)子进程(父进程:(18717)):35
(18717)子进程(父进程:(18717)):36
(18717)子进程(父进程:(18717)):37
(18717)子进程(父进程:(18717)):38
(18717)子进程(父进程:(18717)):39
(18717)子进程(父进程:(18717)):40
(18717)子进程(父进程:(18717)):41
(18717)子进程(父进程:(18717)):42
(18717)子进程(父进程:(18717)):43
(18717)子进程(父进程:(18717)):44
(18717)子进程(父进程:(18717)):45
(18717)子进程(父进程:(18717)):46
(18717)子进程(父进程:(18717)):47
(18717)子进程(父进程:(18717)):48
(18717)子进程(父进程:(18717)):49
(18717)子进程(父进程:(18717)):50
(18717)子进程(父进程:(18717)):51
(18717)子进程(父进程:(18717)):52
(18717)子进程(父进程:(18717)):53
(18717)子进程(父进程:(18717)):54
(18717)子进程(父进程:(18717)):55
(18717)子进程(父进程:(18717)):56
(18717)子进程(父进程:(18717)):57
(18717)子进程(父进程:(18717)):58
(18717)子进程(父进程:(18717)):59
(18717)子进程(父进程:(18717)):60
(18717)子进程(父进程:(18717)):61
(18717)子进程(父进程:(18717)):62
(18717)子进程(父进程:(18717)):63
(18717)子进程(父进程:(18717)):64
(18717)子进程(父进程:(18717)):65
(18717)子进程(父进程:(18717)):66
(18718)子进程(父进程:(18718)):0
(18717)子进程(父进程:(18717)):67
(18718)子进程(父进程:(18718)):1
(18717)子进程(父进程:(18717)):68
(18718)子进程(父进程:(18718)):2
(18717)子进程(父进程:(18717)):69
(18718)子进程(父进程:(18718)):3
(18718)子进程(父进程:(18718)):4
(18717)子进程(父进程:(18717)):70
(18718)子进程(父进程:(18718)):5
(18717)子进程(父进程:(18717)):71
(18718)子进程(父进程:(18718)):6
(18718)子进程(父进程:(18718)):7
(18717)子进程(父进程:(18717)):72
(18718)子进程(父进程:(18718)):8
(18717)子进程(父进程:(18717)):73
(18718)子进程(父进程:(18718)):9
(18718)子进程(父进程:(18718)):10
(18717)子进程(父进程:(18717)):74
(18718)子进程(父进程:(18718)):11
(18717)子进程(父进程:(18717)):75
(18718)子进程(父进程:(18718)):12
(18718)子进程(父进程:(18718)):13
(18717)子进程(父进程:(18717)):76
(18718)子进程(父进程:(18718)):14
(18717)子进程(父进程:(18717)):77
(18718)子进程(父进程:(18718)):15
(18718)子进程(父进程:(18718)):16
(18717)子进程(父进程:(18717)):78
(18718)子进程(父进程:(18718)):17
(18718)子进程(父进程:(18718)):18
(18717)子进程(父进程:(18717)):79
(18718)子进程(父进程:(18718)):19
(18718)子进程(父进程:(18718)):20
(18717)子进程(父进程:(18717)):80
(18718)子进程(父进程:(18718)):21
(18718)子进程(父进程:(18718)):22
(18717)子进程(父进程:(18717)):81
(18718)子进程(父进程:(18718)):23
(18717)子进程(父进程:(18717)):82
(18718)子进程(父进程:(18718)):24
(18717)子进程(父进程:(18717)):83
(18718)子进程(父进程:(18718)):25
(18717)子进程(父进程:(18717)):84
(18718)子进程(父进程:(18718)):26
(18717)子进程(父进程:(18717)):85
(18718)子进程(父进程:(18718)):27
(18717)子进程(父进程:(18717)):86
(18718)子进程(父进程:(18718)):28
(18718)子进程(父进程:(18718)):29
(18717)子进程(父进程:(18717)):87
(18718)子进程(父进程:(18718)):30
(18717)子进程(父进程:(18717)):88
(18718)子进程(父进程:(18718)):31
(18717)子进程(父进程:(18717)):89
(18718)子进程(父进程:(18718)):32
(18717)子进程(父进程:(18717)):90
(18718)子进程(父进程:(18718)):33
(18717)子进程(父进程:(18717)):91
(18718)子进程(父进程:(18718)):34
(18718)子进程(父进程:(18718)):35
(18717)子进程(父进程:(18717)):92
(18718)子进程(父进程:(18718)):36
(18717)子进程(父进程:(18717)):93
(18718)子进程(父进程:(18718)):37
(18717)子进程(父进程:(18717)):94
(18718)子进程(父进程:(18718)):38
(18717)子进程(父进程:(18717)):95
(18718)子进程(父进程:(18718)):39
(18717)子进程(父进程:(18717)):96
(18718)子进程(父进程:(18718)):40
(18718)子进程(父进程:(18718)):41
(18717)子进程(父进程:(18717)):97
(18718)子进程(父进程:(18718)):42
(18717)子进程(父进程:(18717)):98
(18718)子进程(父进程:(18718)):43
(18717)子进程(父进程:(18717)):99
(18718)子进程(父进程:(18718)):44
(18718)子进程(父进程:(18718)):45
(18718)子进程(父进程:(18718)):46
(18718)子进程(父进程:(18718)):47
(18718)子进程(父进程:(18718)):48
(18718)子进程(父进程:(18718)):49
(18718)子进程(父进程:(18718)):50
(18718)子进程(父进程:(18718)):51
(18718)子进程(父进程:(18718)):52
(18718)子进程(父进程:(18718)):53
(18718)子进程(父进程:(18718)):54
(18718)子进程(父进程:(18718)):55
(18718)子进程(父进程:(18718)):56
(18718)子进程(父进程:(18718)):57
(18718)子进程(父进程:(18718)):58
(18718)子进程(父进程:(18718)):59
(18718)子进程(父进程:(18718)):60
(18718)子进程(父进程:(18718)):61
(18718)子进程(父进程:(18718)):62
(18718)子进程(父进程:(18718)):63
(18718)子进程(父进程:(18718)):64
(18718)子进程(父进程:(18718)):65
(18718)子进程(父进程:(18718)):66
(18718)子进程(父进程:(18718)):67
(18718)子进程(父进程:(18718)):68
(18718)子进程(父进程:(18718)):69
(18718)子进程(父进程:(18718)):70
(18718)子进程(父进程:(18718)):71
(18718)子进程(父进程:(18718)):72
(18718)子进程(父进程:(18718)):73
(18718)子进程(父进程:(18718)):74
(18718)子进程(父进程:(18718)):75
(18718)子进程(父进程:(18718)):76
(18718)子进程(父进程:(18718)):77
(18718)子进程(父进程:(18718)):78
(18718)子进程(父进程:(18718)):79
(18718)子进程(父进程:(18718)):80
(18718)子进程(父进程:(18718)):81
(18718)子进程(父进程:(18718)):82
(18718)子进程(父进程:(18718)):83
(18718)子进程(父进程:(18718)):84
(18718)子进程(父进程:(18718)):85
(18718)子进程(父进程:(18718)):86
(18718)子进程(父进程:(18718)):87
(18718)子进程(父进程:(18718)):88
(18718)子进程(父进程:(18718)):89
(18718)子进程(父进程:(18718)):90
(18718)子进程(父进程:(18718)):91
(18718)子进程(父进程:(18718)):92
(18718)子进程(父进程:(18718)):93
(18718)子进程(父进程:(18718)):94
(18718)子进程(父进程:(18718)):95
(18718)子进程(父进程:(18718)):96
(18718)子进程(父进程:(18718)):97
(18718)子进程(父进程:(18718)):98
(18718)子进程(父进程:(18718)):99
18716主进程:21
18716主进程:22
18716主进程:23
18716主进程:24
18716主进程:25
18716主进程:26
18716主进程:27
18716主进程:28
18716主进程:29
18716主进程:30
18716主进程:31
18716主进程:32
18716主进程:33
18716主进程:34
18716主进程:35
18716主进程:36
18716主进程:37
18716主进程:38
18716主进程:39
18716主进程:40
18716主进程:41
18716主进程:42
18716主进程:43
18716主进程:44
18716主进程:45
18716主进程:46
18716主进程:47
18716主进程:48
18716主进程:49
18716主进程:50
18716主进程:51
18716主进程:52
18716主进程:53
18716主进程:54
18716主进程:55
18716主进程:56
18716主进程:57
18716主进程:58
18716主进程:59
18716主进程:60
18716主进程:61
18716主进程:62
18716主进程:63
18716主进程:64
18716主进程:65
18716主进程:66
18716主进程:67
18716主进程:68
18716主进程:69
18716主进程:70
18716主进程:71
18716主进程:72
18716主进程:73
18716主进程:74
18716主进程:75
18716主进程:76
18716主进程:77
18716主进程:78
18716主进程:79
18716主进程:80
18716主进程:81
18716主进程:82
18716主进程:83
18716主进程:84
18716主进程:85
18716主进程:86
18716主进程:87
18716主进程:88
18716主进程:89
18716主进程:90
18716主进程:91
18716主进程:92
18716主进程:93
18716主进程:94
18716主进程:95
18716主进程:96
18716主进程:97
18716主进程:98
18716主进程:99
主线程执行完成!


由于上面程序调用了mp2.join(),因此主进程必须等mp2进程完成后才能向下执行。
'''