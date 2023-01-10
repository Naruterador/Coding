;下面程序将 mov ax,4c00h 之前的指令复制到内存0:200处
assume cs:code
code segment

mov ax,cs
mov ds,ax

mov ax,0020h
mov es,ax

mov bx,0
mov cx,0017h

s: mov al,[bx]
   mov es:[bx],al
   inc bx
   loop s

mov ax,4c00h
int 21h

code ends
end

;将cx的值设置为0，编译程序，用debug跑程序，发现程序运行到 mov ax,4c00h 时长度为17h
;loop执行时，不管cx的循环次数是多少，都只占一个内存单元
