;实验7代码2
;按行处理代码如下:
assume cs:codesg,ds:datasg,es:tablesg,ss:stacksg

datasg segment
    db '1975','1976','1977','1978','1979','1980','1981','1982','1983','1984','1985'
    db '1986','1987','1988','1989','1990','1991','1992','1993','1994','1995'

    dd 16,22,382,1356,2390,8000,16000,24486,50065,97479,140417,197514,345980,590827
    dd 803530,1183000,1843000,2759000,3753000,4649000,5937000

    dw 3,7,9,13,28,38,130,220,476,778,1001,1442,2258,2793,4037,5635,8226
    dw 11542,14430,15257,17800
datasg ends

tablesg segment
    db 21 dup ('year summ ne ?? ')
tablesg ends

stacksg segment
    dd 0,0,0,0
stacksg ends

codesg segment
;首先初始化寄存器
    start: mov ax,datasg
           mov ds,ax
           
           mov ax,tablesg
           mov es,ax
           
           mov ax,stacksg
           mov ss,ax
           mov sp,0010H
              
           mov di,0000H
           mov si,0000H
           mov bx,0000H

;处理表1的1、2行
           mov cx,0002H
    s2:    push cx
           mov cx,0015H
      
      s0:    push cx
             mov bx,0000H
             mov cx,0004h
         
         s1:  mov al,ds:[di][bx]
              mov es:[si][bx],al
              inc bx
              loop s1
             
             add di,0004H
             add si,0010H
             pop cx
             loop s0
           
           mov si,0005H
           pop cx
           loop s2


;处理表1的第三行
          mov si,000Ah
          mov bx,0000h
          mov cx,0015H
     
     s4:  push cx
          mov cx,0002H
     
       s3:  mov al,ds:[di][bx]
            mov es:[si][bx],al
            inc bx
            loop s3
          
          add di,0002H
          add si,0010H
          mov bx,0
          pop cx
          loop s4


;处理表2除法
        mov si,0
        mov cx,0015H
    
   s5:  mov ax,es:[si].5
        mov dx,es:[si].7
        div word ptr es:[si].0AH
        mov es:[si].0DH,ax
        add si,0010H
        loop s5


          mov ax,4c00h
          int 21h
codesg ends
end start


