;实验7代码3
;按列实现代码如下:
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
 	start:  mov ax,datasg
            mov ds,ax
                             
			mov ax,tablesg
            mov es,ax
                              
            mov ax,stacksg
            mov ss,ax
            mov sp,0010H

                              
            mov si,0000H
            mov di,0000H
            mov bx,0000H
            mov cx,0015H

      s0:   push cx
            push bx
            mov bx,0000H
            mov cx,0004H
        s1:   mov al,00H[di]
              mov es:[si][bx],al
              mov al,54H[di]
              mov es:[si].05H[bx],al
              inc bx
              inc di
              loop s1
                             
			   pop bx         
			   mov ax,0A8H[bx]
               mov es:[si].0AH,ax
               add bx,0002H
               add si,0010H
               pop cx
               loop s0


              mov si,0000H
              mov cx,0015H
        s2:   mov ax,es:[si].05H
              mov dx,es:[si].07H
              div word ptr es:[si].0AH
              mov es:[si].0dh,ax
              add si,0010H
              loop s2


               mov ax,4c00h
               int 21h
codesg ends
end start
