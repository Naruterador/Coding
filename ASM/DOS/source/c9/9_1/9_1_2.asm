;如下程序，该程序在运行中将s处的一条指令复制到s0处
assume cs:codesg
codesg segment
    s:     mov ax,bx
           mov si,offset s 
           mov di,offset s0
           mov ax,cs:[si]
           mov cs:[di],ax
    
    s0:    nop   ;nop的机器码占一个字节
           nop
codesg ends
end start

;代码分析:
;1.考虑s和s0在内存中的内存单元地址是多少？分别为 cs:offset s 和 cs:offset s0
;2.这个程序我们需要讲s复制到s0处，也就说将cs:offset s复制到cs:offset s0
;3.段地址在cs中，s的偏移地址已经保存在si中，s0的偏移地址已经保存在s0中
;4.要复制的数据有多长? mov ax,bx 指令长度为2个字节，既1个字
