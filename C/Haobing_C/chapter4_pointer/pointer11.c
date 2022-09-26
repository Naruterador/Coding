/*
An example of multiple level pointer;
 */

#include <stdio.h>
int main(void)
{
	int i = 10;
	int * p; 
	p = &i;
	int ** q = &p;
	int *** r = &q;
	printf("%d",***r);




	return 0;
}