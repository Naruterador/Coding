;补全程序，使jmp指令执行后，CS:IP指向程序的第一条指令。
assume cs:code
data segment
    dd 12345678H
data ends
code segment
start: mov ax,data
    mov ds,ax 
    mov bx,0 
    mov [bx],?        ;解答:    mov [bx],0
    mov [bx+2],?      ;解答     mov [bx+2],code
    jmp dword ptr ds:[0]
code ends
end start
