;将下面的程序编译、连接、用Debug加载、跟踪，然后回答问题
assume cs:code,ds:data,ss:stack
code segment
    start: mov ax,stack
           mov ss,ax
           mov sp,16
           
           mov ax,data
           mov ds,ax

           push ds:[0]
           push ds:[2]
           pop ds:[2]
           pop ds:[0]
           
           mov ax,4c00h
           int 21h
code ends

data segment
    dw 0123H,0456H
data ends

stack segment
    dw 0,0
stack ends

end start

;程序返回前，data段中的数据为多少?
;答：data中的数据不变
;程序返回前，cs=____,ss=_____,ds______。
;答:cs=076AH,ss=076EH,ds=076D
;设程序加载后，code段的段地址为X,则data段的段地址为______,stack段的段地址为_______。
;答:data的段地址为X+3,stack段地址为X+4


