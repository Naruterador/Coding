/*
An example of using ram cross the function
Static function can not be crossed to access;
 */


#include <stdio.h>


void f(int **q)
{
	int i = 5;
	//*q = p     q != **q  q != p;
	//*q = i;    
	*q = &i; //Sp = &i;
}




int main(void)
{
	int * p;
	f(&p);
	printf("%d\n",*p); //This is a illegal accessing because function f have already released by system.
	return 0;
}