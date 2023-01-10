;英文字母的大小写转换问题
;在codesg填写代码，将datasg中的第一个字符串转化为大写，第二个字符串转化为小写

;解析：
;根据ASCII码的二进制形式来看，除了第五位之外（位数从0开始计算，也就是从后往前数）外，大写字母和小写字母其他各位都一样。
;举例：A的二进制为01000001,a的二进制位01100001,只有倒数第五位不同
;这样以来我们就有了方法，一个字母不管它是大写还是小写，只要它的第五位为1就是小写，不为1就是大写。我们可以使用and和or指令来完成这个程序。

;具体代码如下:
assume cs:codesg,ds:datasg

datasg segment
    db 'Basic'
    db 'iNfOrMaTiOn'
datasg ends

codesg segment
    start: mov ax,datasg
           mov ds,ax
           
           mov al,11011111B
           mov cx,5
           mov bx,0
           s1: and ds:[bx],al
               inc bx
               loop s1

           mov al,00100000B 
           mov cx,11
           s2: or ds:[bx],al
               inc bx
               loop s2


           mov ax,4c00h
           int 21h
codesg ends
end start
