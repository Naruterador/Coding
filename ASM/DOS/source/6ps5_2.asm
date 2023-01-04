;将下面程序编译、连接、用debug加载、跟踪，然后回答问题
assume cs:code,ds:data,ss:stack
 data segment
    dw 0123h,0456h
 data ends

 stack segment
    dw 0,0
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


;CPU执行程序，程序返回前，data段中的数据为多少?
;答：data数据段中数据保持不变

;CPU执行程序，程序返回前,cs=_____,ss=________,ds=________
;cs=076CH,ss=076BH,ds=076AH

;设程序加载后,code段的段地址为X,则data段地址为______,stack段的段地址为______。
;data段地址为X-2,stack段地址为X-1

;对于如下定义的段
;name segment
;...
;name ends
;如果段中的数据占N个字节，则程序加载后，该段实际占有的为______。
;解析:
;N分为被16整除和不被16整除。
;当N被16整除时： 占有的空间为(N/16)*16
;当N不被16整除时： 占有的空间为(N/16+1)*16，N/16得出的是可以整除的部分，还有一个余数，余数肯定小于16，加上一个16。
;程序加载后分配空间是以16个字节为单位的，也就是说如果不足16个字节的也分配16个字节。
;两种情况总结成一个通用的公式：((N+15)/16)*16
