/*
Write a function to print all the value of each element;
 */




#include <stdio.h>

void f(int * p,int n)
{
	int i;
	for(i = 0;i < n;i++)
	{
		printf("%d\n",p[i]);

		//printf("%d\n",*(p+i));
		
		//printf("%d\n",*p);
		//p += 1;
	}
}


int main(void)
{
	int a[5] = {1,2,3,4,5};
	int b[6] = {-1,-2,-3,-4,-5,-6};
	int c[100] = {1,99,23,10};
	f(a,5);
	f(b,6);
	return 0;
}