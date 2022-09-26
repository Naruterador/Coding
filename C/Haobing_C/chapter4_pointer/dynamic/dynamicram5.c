/*
An example of using ram cross the function
Dynamic function can  be crossed to access;
 */


#include <stdio.h>
#include <malloc.h>

void f(int **q)
{
  * q = (int *)(malloc(sizeof(int))); //sizeof(int) is used to return the count of byte of what data type is.
  									  //write               
  **q = 5;
  //free(*q);
}




int main(void)
{
	int * p;
	f(&p);
	printf("%d\n",*p); 
	return 0;
}