/*
Another example of function;
 */

#include <stdio.h>


//The void in braces shows that function can not accept any data;
//int shows the return value of the function is 10;
int f(void)
{
	return 10;
}



//void shows the function has no return value;
//
void g(void){
	return 10;
}



int main(void)
{
	j = f();
	printf("%d",j);
	return 0;
	j = g();
}