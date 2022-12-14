
'''
函数默认参数就是在函数定义时为一些参数预先设定一个值，在调用时如果不提供这个参数的实际值就使用默认的参数值。
默认参数的函数
'''
def fun(a,b = 1,c = 2):
	print(a,b,c)

fun(0)
fun(1,2)
fun(1,2,3)

#参数按名称指定
def fun(a,b = 1,c = 2):
	print(a,b,c)

fun(0,c = 4,b = 2)
fun(0,c = 4)
fun(b = 2,a = 1,c = 4)
fun(a = 0,c = 4,b = 2)
fun(c = 1,b = 3,a = 2)


#Python规定默认参数必须出现在函数中一般位置参数后面
#例如下面函数是正确的：
def fun(a,b = 1,c = 2):
	print(a,b,c)

'''
************************************
#但是下列函数是错误的：
def fun(a = 0,b,c = 2):
	print(a,b,c)
#因为默认参数a=0出现在一般参数b的前面。
************************************
'''

#Python规定在调用时也要求键值参数在位置参数的后面
def fun(a,b = 1,c = 2):
	print(a,b,c)
'''
************************************
#那么调用：
fun(a = 0,1,c = 2)    #错误
************************************
'''
fun(0)
fun(0,1)
fun(0,c = 3)
fun(a = 0)
