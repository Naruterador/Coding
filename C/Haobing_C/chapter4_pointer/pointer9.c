/*
The Calculating of pointer;
 */


#include <stdio.h>
int main(void)
{

	int i = 5;
	int j = 10;
	int * p = &i;
	int * q = &j;

	//q - p;     this expression has no meaning; 
	int a[5];

	p = &a[1];
	q = &a[4];
 
	printf("q and p is to apart %d unit",q - p);






	return 0;
}