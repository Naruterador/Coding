;si和di是8086CPU中功能和bx相近的寄存器，si和di不能拆分成2个8位寄存器来使用
;下面三组指令实现了相同的功能:
mov bx,0
mov ax,[bx]

mov si,0
mov ax,[si]

mov di,0
mov ax,[di]

;下面三组指令也实现了相同的功能:
mov bx,0
mov ax,[bx+123]

mov si,0
mov ax,[si+123]

mov di,0
mov ax,[di+123]


