;编程，利用除法指令计算100001/100
assume cs:codesg

codesg segment
start:  mov dx,1
        mov ax,86A1H

        mov bx,100        
        div bx
        
        mov ax,4C00H
        int 21H

codesg ends
end start
