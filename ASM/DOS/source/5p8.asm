;将内存ffff:0～ffff:b单元中数据复制到0:200~0:20b单元中。

assume cs:code
code segment

   mov bx,0
   mov cx,12

s: mov ax,0ffffh
   mov ds,ax
   mov dl,ds:[bx]
  
   mov ax,0200h
   mov ds,ax
   mov ds:[bx],dl
   inc bx
   loop s

   mov ax,4c00h
   int 21h

code ends
end

;0:200~0:20b单元等同于0020:0~0020:b单元
