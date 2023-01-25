;伪指令dd
;dd指令用来表示双字型数据，具体例子如下：
data segment
    db 1
    dw 1
    dd 1
data ends

;在data段中定义了3个数据:
;第一个数据为01H,存在data:0处，占1个字节；
;第二个数据为0001H,存在data:1处,占1个字;
;第三个数据为00000001H,存在data:3，占2个字;
