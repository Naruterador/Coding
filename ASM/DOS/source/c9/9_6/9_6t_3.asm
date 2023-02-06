;用Debug 查看内存，结果如下：
;2000:1000 BE 00 06 00 00 00 .....
;则此时，CPU 执行指令：
    mov ax,2000H 
    mov es,ax
    jmp dword ptr es:[1000H]
后, (CS)=?, (IP)=?     ;解答:    (CS)=0006H,(IP)=00BEH