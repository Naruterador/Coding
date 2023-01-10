;计算2^12，使用loop
assume cs:code
code segment
    
    mov ax,2
    
    mov cx,11    ;在cx中存放循环次数
s:  add ax,ax    ;标号s表示后面跟循环体
    loop s       ;loop指令要在标号所表示的地址前面

    mov ax,4c00h
    int 21h

code ends

end

