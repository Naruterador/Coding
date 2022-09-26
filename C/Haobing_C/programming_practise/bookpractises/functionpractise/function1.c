/*
Calculating the consequence of n!(n > 0 && n < 12);
 */




#include <stdio.h>


long longfun(int n)
{
	int k;
	long s = 1;
	for(k = 1;k <= n;k++)
		s *= k;
	return s;
}

int main(void)
{
	int n;
	long s;
	printf("Please input the value of n(12<n<0):\n");
	scanf("%d",&n);
	s = longfun(n);
	printf("s = %ld\n",s);
	return 0;
}

