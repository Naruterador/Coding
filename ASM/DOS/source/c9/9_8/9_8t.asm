;补全编程，利用loop指令，实现在内存 2000H段中查找第一个值为0的宇节，找到后，将它的偏移地址存储在dx中
assume cs:code
code segment
    start: mov ax,2000H
    mov ds,ax
    mov bx,0
    
    s: mov cl,[bx]
    mov ch,0
    _________       解答:  inc cx
    inc bx
    loop s

    ok: dec bx
    mov dx,bx

    mov ax,4c00h
    int 21h
code ends
end start