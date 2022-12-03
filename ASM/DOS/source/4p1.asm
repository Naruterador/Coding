;一段简单的汇编语言
assume cs:codesg ;伪指令，意义为假设，假设某一段寄存器和程序中一个段(segment)相关联

codesg segment   ;定一个段，段名称为codesg，这个段从这里开始;段名称"codesg"称为标号，一个标号指代了一个地址
    mov ax,0123h
    mov bx,0456h
    add ax,bx
    add ax,ax
    
    mov ax,4c00h      ;这两条指令实现程序返回，当程序运行结束后，要将CPU的控制权归还(这两条返回指令由cpu执行)
    int 21h



codesg ends     ;codesg这个段从这里结束

end             ;表示汇编程序的结束
