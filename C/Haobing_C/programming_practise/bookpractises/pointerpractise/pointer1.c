/*
Inputing 3 integer numbers and sorting that from big to small.
*/


#include <stdio.h>

int main(void)
{	
	int a,b,c,t;
	int * p1 = &a;
	int * p2 = &b;
	int * p3 = &c;
	printf("Please enter three numbers:(1,2,3)\n");
	scanf("%d,%d,%d",&*p1,&*p2,&*p3);
	
	if(*p1 < *p2)
	{
		t = *p1;
		*p1 = *p2;
		*p2 = t;
	}
	if(*p1 < *p3)
	{
		t = *p1;
		*p1 = *p3;
		*p3 = t;

	}
	if(*p2 < *p3)
	{
		t = *p2;
		*p2 = *p3;
		*p3 = t;

	}
	printf("%d,%d,%d\n",*p1,*p2,*p3);

	return 0;

}