/*
Traversing the array with pointer
 */


#include <stdio.h>
int main(void)
{
	int * p;
	int a[3] = {1,2,3};
	int i;
	for(i = 0;i < 3;i++)
	{
		p = a + i;
		printf("%d\n",*p);
	}







	return 0;
}