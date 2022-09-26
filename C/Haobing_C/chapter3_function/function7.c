/*
Function pointer.



*/

#include <stdio.h>

int func1(int a,int b)
{
 	int c;
 	c = a + b;
 	return c;
}

int main(void)
{
	int(*p_func)(int,int);
	p_func = func1;
	int sum  = p_func(1,2);
	printf("%d",sum);
	return 0;
}