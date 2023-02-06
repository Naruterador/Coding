assume cs:code,ds:data,ss:stack

data segment
    db 'welcome to masm!'
    db 00000010B
    db 00100100B
    db 01110001B
data ends 

stack segment stack
    db 128 dup (0)
stack ends 
code segment

    start:mov ax,stack
        mov ss,ax
        mov sp,128

        mov ax,data 
        mov ds,ax

        mov ax,0b800H
        mov es,ax

        mov si,0
        mov di,160*10+30
        mov bx,16
        mov dx,0
        mov cx,3
masm:    push bx
        push cx 
        push si
        push di

        mov dh,ds:[bx]
        mov cx,16
show:    mov dl,ds:[si]
        mov es:[di],dx
        add di,2
        inc si 
         loop show 
    
        pop di
        pop si 
        pop cx
        pop bx 
        add di,160
        inc bx
        loop masm
        mov ax,4c00h
        int 21h    


code ends 
end  start
