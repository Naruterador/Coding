;使用2个寄存器(ds和es)完成5p8的程序
;es:附加段寄存器ES：存放当前执行程序中一个辅助数据段的段地址。 段寄存器 偏移地址寄存器
assume cs:code
code segment

mov ax,0ffffh
mov ds,ax

mov ax,0200h
mov es,ax

mov bx,0
mov cx,12

s:  mov dl,[bx]
    mov es:[bx],dl
    inc bx
    loop s

mov ax,4c00h
int 21h


code ends
end
