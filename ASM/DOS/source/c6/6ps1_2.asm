;编写程序实现依次用内存0:0~0:15中的内容改写程序中的数据，数据的传送用栈来进行。
assume cs:codeseg
codeseg segment
    dw 0123h,0456h,0789h,0abch,0defh,0fedh,0cbah,0987h
    dw 0,0,0,0,0,0,0,0,0,0

    start: mov ax,0
           mov ds,ax

           mov ax,cs
           mov ss,ax
           mov sp,0020h
           
           mov bx,0
           mov cx,8
           
           s: push ds:[bx]
              pop  cs:[bx]
              add bx,2
              loop s
            


           mov ax,4c00h
           int 21h





codeseg ends
end start
