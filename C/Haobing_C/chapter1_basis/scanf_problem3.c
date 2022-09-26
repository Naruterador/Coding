#include <stdio.h>
#include <stdlib.h>
int main()
{
    char i,j;
    printf("put in i:");
    scanf("%c",&i);
    printf("i=%c\n",i);
    printf("put in j:");
    scanf("%c",&j);
    printf("j=%c\n",j);
    return 0;
}

/*
很简单的一个程序，看起来应该没有问题，运行结果理论上应该像这样： 
put in i:e
i=e
put in j:g
j=g

但是实际上是这样： 
put in i:e
i=e
put in j:j=

其中的原因就在于scanf是从标准缓冲区中读取输入的字符的
所以想上面那样写的时候字符型变量j接收的就是输入i之后输入的那个回车键。
*/

//------------------------------------------------------------------

/*
解决方法： 
1.用fflush(stdin);语句来清空缓冲区 
代码：
*/
#include <stdio.h>
#include <stdlib.h>
int main()
{
    char i,j;
    printf("put in i:");
    scanf("%c",&i);
    printf("i=%c\n",i);
    fflush(stdin);
    printf("put in j:");
    scanf("%c",&j);
    printf("j=%c\n",j);
    return 0;
}

//这样就可以得到想要的结果了。


//-----------------------------------------------------------

/*
2.在scanf(“%c”,&j);中的%c之前加个空格->scanf(” %c”,&j);这样这个空格就可以抵消那个回车。

实际上这种情况通常会出现在定义了一个字符型数据（eg.char flag;）然后在一个for或者while循环里面会多次输入这个flag.
代码:
*/
#include <stdio.h>
#include <stdlib.h>
#define maxsize 10
int main()
{
    char flag;
    int i,num[maxsize];
    for(i=0;;i++)
    {
        printf("请输入数字:");
        scanf("%d",&num[i]);
        printf("是否继续输入,如果是就输入y,反之输入n:\n");
        scanf("%c",&flag);
        if(flag=='n')
          break;
    }
    return 0;
}
/*
以上程序会输出:
请输入数字:1
是否继续输入，如果是就输入y,反之输入n:
请输入数字:2
是否继续输入，如果是就输入y,反之输入n:
请输入数字:3
是否继续输入，如果是就输入y,反之输入n:
请输入数字:4
是否继续输入，如果是就输入y,反之输入n:
请输入数字:3
是否继续输入，如果是就输入y,反之输入n:
请输入数字:
*/


//------------------------------------------------------------


/*
例外，在使用getchar()输入字符的时候也会出现上述情况，此时除了可以用上述中方法一解决之外，对应上述的方法二可以可以改为：写两个getchar(); 
代码:
 */

#include <stdio.h>
#include <stdlib.h>
int main()
{
    char i,j;
    printf("put in i:");
    i=getchar();
    printf("i=%c\n",i);
    printf("put in j:");
    j=getchar();
    j=getchar();
    printf("j=%c\n",j);
    return 0;
}
