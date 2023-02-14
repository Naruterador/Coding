assume cs:code

data segment
	db 'Welcome to masm!',0
data ends

code segment
start:
	mov dh,8
	mov dl,3
	mov cl,2
	mov ax,data
	mov ds,ax
	mov si,0		;使ds:si指向字符串的字符
	mov di,0		;di用于索引写入时的位置
	call show_str
	
	mov ax,4c00h
	int 21h
	
show_str:
	push ax 
	push bx 
	push cx 
	push dx 
	push es 
	push si 
	push di 		;将子程序用到的寄存器内容入栈

	mov ax,0B800h	
	mov es,ax		;寄存器ES指向彩色模式段
	
	mov al,160		;8位寄存器乘法，一个存在AL中，另一个存在寄存器或内存单元中
	mul dh 			;定位行的偏移，乘法结果存放在AX中
	mov bx,ax		;以防被下一个乘法覆盖，这里需要保存寄存器AX的内容，如BX
	mov al,2
	mul dl 			;定位列的偏移，乘法结果存放在AX中
	add bx,ax		;最终的偏移
	
	mov al,cl		;将颜色属性存到AL中，因为后面的jcxz指令会用到CX
	
help:
	mov cl,ds:[si]		;取字符串的字符
	jcxz exit			;如果CX等于0则退出
	mov es:[bx+di],cl	;低位写入字符的ASCII码
	mov es:[bx+di+1],al	;高位写入字符的属性
	inc si				;偏移1字节取字符
	add di,2			;偏移2字节写字符
	jmp short help		;转移实现类似循环的功能
	
exit:
	pop di 
	pop si 
	pop es 
	pop dx 
	pop cx
	pop bx 
	pop ax				;将子程序用到的寄存器内容出栈
	
	ret					;子程序返回
code ends 
end start

