;随意向一段内存空间写入内容是很危险的，因为这段空间中可能存放着重要的系统数据或者代码。

;如下面的指令:
;mov ax,1000h
;mov ds,ax
;mov al,0
;mov ds:[0],al
;如果1000:0中存放着重要数据或者代码那么我们使用 mov ds:[0],al将其修改就将引发错误

assume cs:code
code segment
 mov ax,0
 mov ds,ax
 mov ds:[26h],ax
 

 mov ax,4c00h
 int 21h
code ends
end

;执行上面的程序会引起死机，因为在0:26h位置存放着重要的系统数据
;一般情况下0:200~0:2ff(00200h~002ffh)这256个字节空间是相对安全的空间,我们需要写入内容时，就使用0:200~0:2ff这段空间
