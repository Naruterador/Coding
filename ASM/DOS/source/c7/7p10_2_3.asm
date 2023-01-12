;本程序使用内存单元来保存外循环的计数值(cx)
assume cs:codesg,ds:datasg

datasg segment
    db 'ibm             '
    db 'dec             '
    db 'dos             '
    db 'vax             '
    dw 0
datasg ends

codesg segment
start: mov ax,datasg
       mov ds,ax
       mov bx,0
       mov cx,4

       s1: mov ds:[0040H],cx
           mov si,0
           mov cx,3

           s2: mov al,ds:[bx+si]
               and al,11011111B
               mov ds:[bx+si],al
               inc si
               loop s2

        add bx,16
        mov cx,ds:[0040H]
        loop s1


        mov ax,4c00h
        int 21h

codesg ends
end start

;上面程序中，用内存单元来保存数据，但是上面程序的问题是，如果需要保存多个数据的时候，你就必须要
;记住数据放到哪个单元中，这样容易造成混乱，一般来说，我们如果需要暂存数据的是哦吼，我们都应该使用栈改进的代码保存在7p10_2_4.asm中。
