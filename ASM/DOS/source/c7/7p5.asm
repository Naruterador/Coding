;使用[bx+idata],来指明内存地址
mov ax,[bx+200]   ;将一个内存单元内的内容送入ax寄存器，这个内存单元的长度为2字节，偏移地址为bx中的数值加上200，段地址在ds中。

;该指令也可以写成如下格式:
mov ax,[200+bx]
mov ax,200[bx]
mov ax,[bx],200
