;本程序是7p10_2_3,asm代码的改进，使用栈来保存外循环的计数值(cx)
assume cs:codesg,ds:datasg,ss:stack

datasg segment
    db 'ibm             '
    db 'dec             '
    db 'dos             '
    db 'vax             '
datasg ends

stack segment
    dw 0,0,0,0,0,0,0,0
stack ends

codesg segment

start: mov ax,stack
       mov ss,ax
       mov sp,16

       mov ax,datasg
       mov ds,ax
       
       mov bx,0
       mov cx,4
       
       s1: mov si,0
           push cx
           mov cx,3

       s2: mov al,ds:[bx+si]
           and al,11011111B
           mov ds:[bx],al
           inc bx
           loop s2

           add bx,16
           pop cx
           loop s2

    mov ax,4c00h
    int 21h

codesg ends
end start

