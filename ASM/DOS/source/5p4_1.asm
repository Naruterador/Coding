;debug和汇编编译器masm对指令的不同处理
assume cs:code
code segment

    mov ax,2000h
    mov ds,ax
    mov al,[0]
    mov bl,[1]
    mov cl,[2]
    mov dl,[3]


    mov ax,4c00h
    int 21h

code ends
end


;在masm汇编编译器中，mov al,[0],会被当作指令mov al,0 处理
;在debug中，mov,al[0]会被正确处理
