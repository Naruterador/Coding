;利用栈，将程序中定义的数据逆序存放
assume cs:code
code segment
    dw 0123h,0456h,0789h,0abch,0defh,0fedh,0cbah,0987h
    dw 0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0    ;这16个字型数据空间作为栈空间,由系统分配
    
    start: mov ax,cs
           mov ss,ax
           mov sp,20h

           mov bx,0
           mov cx,8

           s0:  push cs:[bx]
                add bx,2
                loop s0
           
           mov bx,0
           mov cx,8
        

           s1:  pop cs:[bx]
                add bx,2
                loop s1

           mov ax,4c00h
           int 21h
code ends
end start
