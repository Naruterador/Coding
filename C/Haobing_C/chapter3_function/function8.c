/*
Callback Function;
*/



#include <stdio.h>

int add(int a,int b)
{
	return a + b; 
}

int padd(int a,int b,int (*pfun)(int,int))
{
	return pfun(a,b);
}


int main(void)
{
	int sum = padd(1,2,add);
	printf("%d\n",sum);
	return 0;
}