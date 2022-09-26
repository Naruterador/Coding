/*
An example of pointer.
 */

#include <stdio.h>
int main(void)
{
	int * p;
	int i = 100;
	*p = i; //This is the wrong operation of assignment.
	        //Because *p  and i has different ram space.
	        //we can not modify the ram space that not belong to you.
	        //we need assign the *p first.
	printf("%d",*p);
	return 0;
}