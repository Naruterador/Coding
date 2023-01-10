;[bx+si+idata]和[bx+di+idata]
;因为[bx+si+idata]与[bx+di+idata]的含义相似,这里以[bx+si+idata]为例进行讲解:
;[bx+si+idata]表示一个内存单元，它的偏移地址为(bx)+(si)+idata
;该指令也可以被写成如下格式:
mov ax,[bx+200+si]
mov ax,[200+bx+si]
mov ax,200[bx][si]
mov ax,[bx].200[si]
mov ax,[bx][si].200
