;编写code段中的代码，将a段和b段中的数据依次相加,将结果存到c段中
assume cs:code
a segment
    db 1,2,3,4,5,6,7,8    ;DW 定义一个字 DB 定义一个字节 DD 定义一个双字 前面的D表示定义,后面的字母W 、B 、D依次表示字(一般为16位)、字节(为8位)、双字(一般为32位) 
a ends

b segment
    db 1,2,3,4,5,6,7,8
b ends

c segment
    db 1,2,3,4,5,6,7,8
c ends

code segment
start: mov cx,8
       mov bx,0
       s: mov ax,a
          mov ds,ax
          
          mov dl,ds:[bx]
    
          mov ax,b
          mov ds,ax
          add dl,ds:[bx]

          mov ax,c
          mov ds,ax
          mov ds:[bx],dl

          inc bx
          loop s
          
        mov ax,4c00h
        int 21h
code ends
end start
