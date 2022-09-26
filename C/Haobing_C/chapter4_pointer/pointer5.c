/*
Pointer and array.
 */



#include <stdio.h>
int main(void)
{
	int * p;
	int a[5] = {1,2,3,4,5};
	p = a;
	printf("%d",*p);

	printf("%x",a);



	return 0;  
}