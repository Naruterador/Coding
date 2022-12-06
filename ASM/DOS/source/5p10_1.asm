;编程，向内存0:200~0:23F依次传送数据0~63(3FH)，程序中只能用9条指令，9条指令中包括 mov ax,4c00h和int 21h

assume cs:code
code segment

;Range: 0200:0~0020:3F

mov ax,0020h
mov ds,ax

mov bx,0
mov cx,64

s: mov ds:[bx],bx
   inc bx
   loop s

mov ax,4c00h
int 21h

code ends
end
