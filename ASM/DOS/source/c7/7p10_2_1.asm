;编程，将datasg段中每个单词改为大写字母
assume cs:codesg,ds:datasg
datasg segment
    db 'ibm             '
    db 'dec             '
    db 'dos             '
    db 'vax             '
datasg ends

codesg segment

start: mov ax,datasg
       mov ds,ax

       mov cx,4
       mov bx,0

       s1: mov cx,3
           mov si,0

           s2: mov al,[bx+si]
               and al,11011111B
               mov [bx+si],al
               inc si
               loop s2
       
           add bx,16
           loop s1

codesg ends
end start

;本程序问题在于，虽然进行了二重循环，但是却只用了一个计数器，造成在进行内循环的时候，覆盖了外层循环的循环计数值。多用一个计数器又不可能，因为loop指令默认cx为循环计数器，该怎么办呢？
;解决方法为，我们应该每次开始内存循环的时候，将外层循环的cx中数值保存起来，在执行外层循环的loop指令前，再恢复外层循环的cx数值。可以用寄存器dx来临时保存cx中的数值，改进代码在7p10_2_2.asm中。
