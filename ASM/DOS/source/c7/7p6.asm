;使用[bx+idata]的形式完成字符串大小写的转换，具体要求如下:
;在codesg中填写代码，将datasg中定义的第一个字符串转化为大写，第二个字符串转换为小写。
assume cs:codesg,ds:datasg
datasg segment
    db 'Basic'
    db 'Minix'
datasg ends

codesg segment
start: mov ax,datasg
       mov ds,ax
       
       mov cx,5
       mov bx,0
       
       s: mov al,11011111B
          and ds:[bx],al
          
          mov al,00100000B
          or ds:[bx+5],al

          inc bx
          loop s

          mov ax,4c00h
          int 21h

codesg ends
end start


;C语言表示数组的方式为:a[i],b[i]
;汇编语言表示数组的方式为:0[bx],5[bx]
;通过比较我们发现，[bx+idata]的表现形式，为高级语言实现数组提供了便利的机制。
