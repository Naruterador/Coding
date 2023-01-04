;计算ffff:0006单元中的数乘以3，结果存储在dx中
assume cs:code
code segment
    
    mov ax,0ffffh  ;在汇编程序中，数据不能以字母开头，所以要在最前面写0
    mov ds,ax
    
    mov bx,6
    
    mov al,[bx]  ;由于ffff:6存的是字节单元，但是dx是字单元，无法直接做加法操作
    mov ah,0   ;所以将ffff:6的单元存入al，再将ax移动到dx


    mov dx,0
    mov cx,3
    s: add dx,ax
    loop s
    
    mov ax,4c00h
    int 21h

code ends
end
