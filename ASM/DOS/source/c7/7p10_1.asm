;编程，将datasg段中，每个单词的开头字母改为大写字母
assume cs:codesg,ds:datasg

datasg segment
    db '1. file         '
    db '2. edit         '
    db '3. search       '
    db '4. view         '
    db '5. options      '
    db '6. help         '
datasg ends

codesg segment
start: mov ax,datasg
       mov ds,ax

       mov cx,6
       mov bx,0

       s: mov al,11011111B
          and ds:[bx+3],al
          add bx,16
          loop s

    mov ax,4c00h
    int 21h




codesg ends
end start
