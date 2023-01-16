;寻址的综合方式
;关于DEC公司的一条记录（1982年）如下：
;公司名称: DEC
;总裁姓名: Ken Olsen
;排名: 137
;收入: 40亿美元
;著名产品: PDP(小型机)


;到了1988年，DEC公司的信息有了如下变化:
;Ken Olsen在富翁榜上的排名已经升至38位；
;DEC的收入增加了70亿美元;
;该公司的著名产品已经变为VAX系列计算机

;首先，我们应该分析一下要修改的数据。
;要修改内容是：
;（1)(DEC 公司记录）的(排名字段）
;（2） （DEC 公司记录）的（收入字段）
; (3） （DEC 公司记录)的(产品字段)的(第一个字符）、（第二个字符)、（第三个字符）

;从要修改的内容，我们就可以逐步 地确定修改的方法
; (1） 要访问的数据是 DEC 公司的记录，所以，首先要确定 DEC 公司记录的位置：
    R=seg: 60
;确定了公司记录的位置后，下面就进一步确定要访问的内容在记录中的位置
; (2） 确定排名字段在记录中的位置：OCH
;（3）修改 R+OCH 处的数据
; (4） 确定收入字段在记录中的位置：OEH
; (5） 修改 R+OEH 处的数据
; (6） 确定产品字段在记录中的位置：10H
;要修改的产品字段是一个字待串(或一个数组），需要访问宇符串中的每一个宇符。所以要进一步确定每一个字符在字符串中的位置
;（7)确定第一个宇符在品字段中的位置：P=0
;（8） 修改 R+1OH+P 处的数据：P=P+1
;（9） 修改R+10H+P 处的数据：P=P+1
; (10）修改 R+1OH+P处的数据
;根据上面的分析，程序如下:
    mov ax,seg
    mov ds,ax
    mov bx,60h

    mov word ptr [bx+0ch],38
    add word ptr [bx+0eh],70
    
    mov si,0

    mov byte ptr [bx+10h+si],'V' 
    inc si
    mov byte ptr [bx+10htsi],'A' 
    inc si
    mov byte ptr [bx+10h+si],'X'

;如果你熟悉C语言的话，我们可以用C语言来描述这个程序，大致应该是这样的：
    struct company {
        char cn [3];
        char hn[9];
        int pm;
        int sr;
        char cp [3];
    };
    struct company dec={"DEC", "Ken Olsen", 137,40, "PDP"};
;定义一个公司记录的变量，内存中将存有一条公司的记录
main ()
{
    int i;
    dec.pm = 38;
    dec.sr = dec.sr + 70;
    i = 0;
    dec.cp[i] = 'V';
    i++; 
    dec.cp[i] = 'A';
    i++;
    dec.cp[i] = 'X';
    return 0;
}
;我们再按照 C 语言的风格，用汇编语言写一下这个程序，注意和C 语言相关语句的比对：
    mov ax,seg 
    mov ds,ax 
    mov bx,60h

    mov word ptr [bx].Och,38
    add word ptr [bx].Oeh,70
    
    mov si,0
    
    mov byte ptr [bx].10h[si],'V'
    inc si
    mov byte ptr [bx].10h[si],'A'
    inc si
    mov byte ptr [bx].10h[si],'X'
;我们可以看到，8086CPU 提供的如[bx+si+idata]的寻址方式为结构化数据的处理提供了方便。使得我们可以在编程的时候，从结构化的角度去看待所要处理的数据。从上面可以看到，一个结构化的数据包含了多个数据项，而数据项的类型又不相同，有的是字型数据，有的是字节型数据，有的是数组(字符串)。一般来说，我们可以用[bx+idata+si]的方式来访问结构体中的数据。用 bx 定位整个结构体，用 idata 定位结构体中的某一个数据项，用si 定位数组项中的每个元素。为此，汇编语言提供了更为贴切的书写方式如：[bx].idata、[bx]idata[si]
;在C语言程序中我们看到，如：dec.cpi[i]， dec 是一个变量名，指明了结构体变量的地址，cp 是一个名称，指明了数据项cp 的地址，而i用来定位cp 中的每一个字符。汇编语言中的做法是：bx.10h[si]
