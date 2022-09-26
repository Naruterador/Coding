/*
Calculating the sum of 1!+2!+3!+4!;
1! = 1*1;
2! = 1*2;
3! = 1*2*3;
 */


#include <stdio.h>
int main(void)
{
	int i = 1,t = 1,s = 0;
	for(i=1;i<=4;i++)
	{
		t = t * i;
		s += t;
	}
	printf("%d",s);
	return 0;
}