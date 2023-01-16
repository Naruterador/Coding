;指定要处理的数据有多长
;8086CPU可以处理的数据有两种，一种是字，一种是字节

;1.通过寄存器指明要处理的数据的尺寸
;（1）下面指令中，寄存器指明了进行的是字操作
        mov ax,1
        mov bx,ds:[0]
        mov ds,ax
        mov ds:[0]
        inc ax
        add ax,1000
;（2）下面的指令中，寄存器指明了指令进行的是字节操作
        mov al,1
        mov al,bl
        mov al,ds:[0]
        mov ds:[0],al
        inc al
        add al,100

;2.在没有寄存器存在的情况下，用操作符X ptr 指明内存单元的长度，X在汇编指令中可以为word或者byte
;（1）下面指令中，用word ptr指明了指令访问的内存单元是一个字单元
    mov word ptr ds:[0],1
    inc word ptr [bx]
    inc word ptr ds:[0]
    add word ptr [bx],2
;（2）下面指令中，用byte ptr指明了指令访问的内存单元是一个字节单元
    mov byte ds:[0],1
    inc byte ptr [bx]
    inc byte ptr ds:[0]
    add byte ptr [bx],2
;在没有寄存器参与的内存单元访问指令中，用word ptr或byte ptr显性地指明所要访问的内存单元的长度是很必要的。否则,CPU无法得知所要访问的单元是字单元还是字节单元

;假设我们用 Debug 查看内存的结果如下
;2000: 1000 FF FF FF FF FF FF ......
;那么指令：
mov ax, 2000H mov ds, ax
mov byte ptr [1000H], 1
;将使内存中的内容变为：
;2000: 1000 01 FF FF FF FF FF ......

;而指令：
mov ax, 2000H mov ds,ax
mov word ptr [1000H],1
;将使内存中的内容变为：
;2000: 1000 01 00 FF FF FF FF ......

;这是因为mov byte ptr [1000H],1修改的是字节单元ds:1000H的值，而mov word ptr [1000H],1修改的是字单元ds:1000H值
    
