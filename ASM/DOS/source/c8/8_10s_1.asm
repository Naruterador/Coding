;实验7 寻址综合实验1
assume cs:codesg,ds:data,ss:stack
data segment
    db '1975','1976','1977','1978','1979','1980','1981','1982','1983'
    db '1984','1985','1986','1987','1988','1989','1990','1991','1992'
    db '1993','1994','1995'
;ds add = 076A:0000


    dd 16,22,382,1356,2390,8000,16000,24486,50065,97479,140417,197514
    dd 345980,590827,803530,1183000,1843000,2759000,3753000,4649000,5937000
;ds add = 076A:0054



    dw 3,7,9,13,28,38,130,220,476,778,1001,1442,2258,2793,4037,5635,8226
    dw 11542,14430,15257,17800
;ds add = 076A:00A8
data ends

table segment
    db 21 dup ('year summ ne ??')
;ds add = 076A:00E0
;year = 4bit + 1bit(space)
;summ = 4bit + 1bit(space)
;ne = 2bit + 1bit(space)
;avg = 2bit + 1bit(space)
table ends


stack segment
    dw 0,0,0,0,0,0,0,0,0,0
stack ends



codesg segment

start: mov ax,data
       mov ds,ax
       
       mov ax,stack
       mov ss,ax
       mov sp,16  ;指向占顶
        
       mov bx,0
       mov si,0
       mov di,0
       mov cx,21
       
       s1: push cx
           mov cx,2
           
           s2: mov dx,[bx].0000H[di]
               mov [bx].00E0H[si],dx
                               
               mov dx,[bx].0054H[di]
               mov [bx].00E0H[si+5],dx

               add si,2
               add di,2
               loop s2

            pop cx
            add si,11            
            loop s1

        mov cx,21
        mov bx,0
        mov si,10
        mov di,0
        
        s3: mov dx,[bx].00A8H[di]
            mov [bx].00E0H[si],dx
            add di,2
            add si,15
            loop s3


       mov ax,4c00h
       int 21h

codesg ends
end start
