/*
Using another function to modify the array in other function.
 */


#include <stdio.h>

void g(int * p)
{
	 p[1] = 100; 
}


void f(void)
{
	int a[5] = {1,2,3,4,5};
	g(a);
	printf("%d\n%d\n%d\n",a[1],*(a+1),*a+1);

}



int main(void)
{
	f();
	return 0;
}