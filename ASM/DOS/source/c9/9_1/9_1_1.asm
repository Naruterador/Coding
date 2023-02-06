;操作符offset，它的功能是获取当前标号的偏移地址,举例如下:
assume cs:codesg
codesg segment
    start: mov ax,offset start      ;相当于mov ax,0
    s:     mov ax,offset s          ;相当于mov ax,3
codesg ends
end start

;上面程序中offset操作符取得了标号start和s的偏移地址0和3
;指令mov ax,offset start，相当于mov ax,0 因为start是代码段中的标号，它所标记的指令是代码中的第一条指令，偏移地址为0
;mov ax,offset s相当于指令mov ax,3,因为s是代码段中的标号，它所标记的指令是代码段中的第二条指令，第一条指令长度为3个字节，则s的偏移地址为3
