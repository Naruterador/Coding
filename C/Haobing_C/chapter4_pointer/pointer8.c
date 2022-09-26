/*
An example of array;
 */

#include <stdio.h>
int main(void)
{
	int a[3] = {1,2,3};



    /*
	a = &a[0];
	"a" is a constant ,we can not modify the value of "a"
    */

	printf("%#X,%#X\n",a,&a[0]);





	return 0;
}