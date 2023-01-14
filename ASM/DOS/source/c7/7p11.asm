;编程，将datasg段中每个单词的前4个字母改为大写字母
assume cs:codesg,ss:stacksg,ds:datasg
stacksg segment
 dw 0,0,0,0,0,0,0,0
stacksg ends

datasg segment
    db '1. display      '
    db '2. brows        '
    db '3. replace      '
    db '1. modify       '
datasg ends

codesg segment
  start: mov ax,stacksg
         mov ss,ax
         mov sp,16

         mov ax,datasg
         mov ds,ax
         
         mov bx,0
         mov cx,4

         s1: mov si,0
             push cx
             mov cx,4
         
         s2: mov al,ds:[bx+si+3]
             and al,11011111B
             mov ds:[bx+si+3],al
             inc si
             loop s2

         add bx,16
         pop cx
         loop s1
             
    mov ax,4c00h
    int 21h
    
codesg ends
end start

