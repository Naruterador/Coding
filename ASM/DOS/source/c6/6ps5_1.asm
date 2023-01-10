;将下面程序编译、连接、用Debug加载、跟踪，然后回答问题
assume cs:code,ds:data,ss:stack

data segment
    dw 0123h,0456h,0789h,0abch,0defh,0fedh,0cbah,0987h
data ends

stack segment
    dw 0,0,0,0,0,0,0,0
stack ends

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
end start

;程序返回前，data段中的数据为多少？ 答：段中数据保持不变
;程序返回前cs=_____,ss=_____,ds=_____。 答：cs=076CH,ss=076BH,ds=076AH
;设程序加载后，code段的地址为X，则data段地址为____,stack段的地址为_____。答: data段地址为X-2,stack段地址为X-1
