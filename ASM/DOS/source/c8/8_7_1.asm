;div指令
;div 是除法指令，使用 div 做除法的时候应注意以下问题。
;(1) 除数：有8位和16位两种，在一个 reg 或内存单元中。
;(2) 被除数：默认放在 AX 或 DX 和 AX 中，如果除数为8位，被除数则为16位，默认在 AX 中存放；如果除数为16位，被除数则为32位，在 DX 和 AX 中存放，DX 存放高16位，AX 存放低16位。
;(3) 结果：如果除数为 8位，则 AL 存储除法操作的商，AH 存储除法操作的余数：
;如果除数为16位，则AX 存储除法操作的商，DX 存储除法操作的余数。
;格式如下：
    div reg
    div 内存单元
;现在，我们可以用多种方法来表示一个内存单元了，比如下面的例子：
    div byte ptr ds:[0]
    ;含义：
   （al)=(ax)/((ds)*16+0）的商
    (ah)=(ax/((ds)*16+0）的余数

    div word ptr es:[0]
    ;含义：
    (ax)=[(dx)*10000H+(ax)]/((es)*16+0)）的商
    (dx)=[(dx)*10000H+(ax)]/((es)*16+0)）的余数

    div byte ptr [bx+si+8]
    ;含义：
    (al)=(ax)/((ds)*16+(bx)+(si)+8）的商
    (ah)=(ax)/((ax)*16+(bx)+(si)+8）的余数

    div word ptr [bx+si+8]
    含义：
    (ax)=[(dx)*10000H+(ax)]/((ds)*16+(bx)+(si)+8）的商
    (dx)=[(dx)*10000H+(ax)]/((ds)*16+(bx)+(si)+8) 的余数