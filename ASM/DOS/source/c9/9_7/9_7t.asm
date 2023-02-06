;补全编程，利用jcxz指令，实现在内存2000H段中查找第一个值为0的字节，找到后，将它的偏移地址存储在dx中。
assume cs:code 
code segment
    start: mov ax,2000H 
    mov ds,ax 
    mov bx,0

    s: _____                    ;解答:   mov cl,ds:[bx]
       _____                            mov ch,0
       _____                            jcxz ok
       _____                            inc bx
    
    jmp short s

    ok: mov dx,bx

    mov ax, 4c00h 
    int 21h

code ends 
end start