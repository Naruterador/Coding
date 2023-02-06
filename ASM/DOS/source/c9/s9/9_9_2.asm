;实验10自编
assume cs:codesg,ds:datasg,ss:stack

datasg segment
    db 'welcome to masm!'
    db 00100000B     ;绿色字符颜色
    db 01000010B     ;绿底红字
    db 00010111B     ;白底蓝字
datasg ends

stack segment
    db 128 dup (0)
stack ends

codesg segment

start: mov ax,datasg
       mov ds,ax
       
       mov ax,stack
       mov ss, ax
       mov sp,128
      
       mov ax,0B800H    ;彩色模式先是缓冲区段地址
       mov es,ax
       
       mov cx,3
       mov bx,16
       mov di,160*12+6   ;从一页的中间开始输入字符串'welcome to masm!'
       mov si,0
       
       s1: push cx       ;外循环用于控制输入3次字符串
           push si
           push di
           mov cx,16
        
           s2:  mov dl,ds:[s]         ;内存循环用于控制每个字符串的输入和特效
                mov dh,ds:[bx]                 
                mov es:[di],dx
                inc si
                add di,2
                loop s2
                
                pop di
                pop si 
                pop cx
                inc bx
                add di,160   ;另外起一行
                loop s1

    mov ax,4c00h
    int 21h


codesg ends
end start
