;将dw定义的8个字型数据累加到ax寄存器中

assume cs:code
code segment

 dw 0123h,0456h,0789h,0abch,0defh,0fedh,0cbah,0987h 
;dw用于定义字型数据 由于程序在运行的时候代码放在cs寄存器中，所以dw定义的数据就在dw最开始处，8个dw定义的数据分别在cs:0,cs:1,cs:2~cs:8中。汇编指令是从第16个字节才开始的

start: mov bx,0
       mov ax,0
       

       s:mov cx,8
         add ax,cs:[bx]
         add bx,2 ;因为是一次累加一个字，所以这里bx要加2
         loop s
       
       mov ax,4c00h
       int 21h

code ends

end start ;start标号指明了程序的入口，也就是汇编指令从哪里开始开始执行，它们是一对的
