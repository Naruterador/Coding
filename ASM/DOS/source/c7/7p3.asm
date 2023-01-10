; 在汇编语言中，我们可以用'........'的方式，指明数据是以字符的形式给出的，汇编编译器会将它们转化为相对应的ASCII码

assume cs:code.,ds:data

data segment
    db 'unIX'
    db 'foRK'
data ends

code segment
start: mov al,'a'
       mov bl,'b'

       mov ax,4c00h
       int 21h
code ends
end start


;db 'unIX'相当于db 75H,6EH,49H,58H。u,n,I,X的ASCII分别为75H,6EH,49H,58H
;db 'foRK'相当于db 66H,6FH,52H,4BH。......
;mov al,'a' 相当于 "mov al,61H"。......
;mov al,'b' 相当于 "mov al,62H"。......
