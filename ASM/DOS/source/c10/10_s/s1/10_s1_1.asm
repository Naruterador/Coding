assume cs:code,ds:data,ss:stack
data segment
    db 'Welcome to masm!',0
data ends

stack segment
    dw 8 dup (0)
stack ends

code segment
    start: mov dh,8
           mov dl,3
           
           mov cl,2
           mov ch,0

           mov ax,data
           mov ds,ax
           
           mov ax,stack
           mov ss,ax
           mov sp,16
           
           mov si,0



           call show_str

           mov ax,4c00h
           int 21h

    exit:     ret           ;当扫描到0时结束程序

    show_str: push cx。     ;因为后面还要用到cl,ch,所以这里先将cx的值压栈
              
              mov al,160    ;行偏移计算    
              sub dh,1
              mul dh 
              mov bx,ax。   ;行偏移计算结束
              
              sub dl,1。    ;列偏移计算
              mov al,2
              mul dl
              add bx,ax。   ;列偏移计算结束
              
              mov ax,0B800H
              mov es,ax

              pop ax
            
    change:   mov cl,ds:[si] ;检测字符串的每个字符是否为0
              mov ch,0
              jcxz exit      ;当扫描到0的时候程序跳转到结束
              
              mov dl,cl      ;将字符串中每个字符放入显示缓存位置
              mov dh,al
              mov es:[bx],dx
              
              inc si
              add bx,2
              jmp short change
code ends
end start
