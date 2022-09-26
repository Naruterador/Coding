/*
An example of malloc;
 */


#include <stdio.h>
#include <malloc.h>


void f(int * q)
{
	//**q = 200;  error;
	//  p = 200;  error;
	// *p = 200;  error;
	*q = 200;
	free(q);      //This expression will release the ram that q points.
}





int main(void)
{

	int * p = (int *)(malloc(sizeof(int)));
	
	*p = 10;

	printf("%d\n",*p);
	f(p);
	printf("%d\n",*p);







}