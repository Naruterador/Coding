；若要使程序中的jmp指令执行后，CS:IP指向程序的第一条指令，在data 段中应该定义哪些数据？

assume cs:code
data segment
?                            ;答案 dw 0,0
data ends

code segment
start: mov ax,data 
mov ds,ax 
mov bx,O 
jmp word ptr [bx+1]
code ends 

end start

