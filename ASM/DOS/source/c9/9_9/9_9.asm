assume cs:codesg
codesg segment
start: mov ax,0B800H
       mov ds,ax

       mov byte ptr ds:[0],'A'
       mov byte ptr ds:[1],00000010B
       
       mov ax,4c00h
       int 21h

codesg ends
end start
