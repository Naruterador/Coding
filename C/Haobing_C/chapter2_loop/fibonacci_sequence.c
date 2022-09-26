/*
classic problem of fibonacci;
The format of fibonacci:
F(1)=F(2)=1,F(n)=F(n-1)+F(n-2) (n≥3)

1 1 2 3 5 8 13 21 .......
 */


#include <stdio.h>

int main(void)
{

	int n;
	int f1=1;
	int f2=1;
	int f3 = 1;
	int x;
	printf("Please input a number:\n");
	scanf("%d",&n);

	//if(n<=2)
	//	f3 = 1;
	for(x = 0;x <= n;x++)
	{
		if(x<2)
			printf("%d ",f3);
		else
		{
			f3=f1+f2;
			f1=f2;
			f2=f3;
			printf("%d ",f3);
		}
	}
	//printf("The number of NO.%d's fibonacci sequence is:%d\n",n,f3);



	return 0;
}