;本程序是7P10_2_1.asm程序的改进版，使用了dx寄存器来保存外循环cx的值
assume cs:codesg,ds:datasg
datasg segment
    db 'ibm             '
    db 'dec             '
    db 'dos             '
    db 'vax             '
datasg ends
codesg segment
start: mov ax,datasg
       mov ax,ds
       
       mov bx,0
       mov cx,4
       mov dx,0

       s1: mov dx,cx
           mov si,0
           mov cx,3

       s2: mov al,ds:[bx+si]
           and al,11011111B
           mov ds:[bx+si],al
           inc si
           loop s2

        add bx,16
        mov cx,dx
        loop s1

        mov ax,4c00h
        int 21h

codesg ends
end start

;除了使用寄存器来保存内循环计数器(cx)的值，我们还可以使用内存单元来保存外循环计数器的值
;具体代码保存在7p10_2_3.asm
