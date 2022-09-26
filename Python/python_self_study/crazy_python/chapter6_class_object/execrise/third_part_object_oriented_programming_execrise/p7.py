#coding=utf-8
'''
私有属性和私有方法

在实际开发中，对象 的 某些属性或方法 可能只希望 在对象的内部被使用，而 不希望在外部被访问到
私有属性 就是 对象 不希望公开的 属性
私有方法 就是 对象 不希望公开的 方法
-------------------------------------------------------------------------------
定义方式
在 定义属性或方法时，在 属性名或者方法名前 增加 两个下划线，定义的就是 私有 属性或方法
-------------------------------------------------------------------------------

'''

class Women:
	def __init__(self,name,age):
		self.name = name
		self.__age = age

	def __secret(self):
		print("%s my age is " % self.__age)



w1 = Women("xiaofang",18)

print(w1.name)

#w1.__secret()


'''
python 中，并没有 真正意义 的 私有

在给 属性、方法 命名时，实际是对 名称 做了一些特殊处理，使得外界无法访问到
处理方式：在 名称 前面加上 _类名 => _类名__名称
----------------------------------------------------------------
'''
#私有属性，外部不能直接访问到
print(w1._Women__age)
#私有方法，外部不能直接调用
w1._Women__secret()