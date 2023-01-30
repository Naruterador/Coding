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
