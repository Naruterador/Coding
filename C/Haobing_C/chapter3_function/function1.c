/*
The first example of function;
 */

#include <stdio.h>


/*
max is the name of function; 
i and j is formal parameter;
void means the function has no return value;
 */


void max(int i,int j)
{
	if(i > j)
		printf("%d",i);
	else
		printf("%d",j);
}

int main(void)
{
	int a,b;
	a = 1;
	b = 2;
	max(a,b);
	return 0;
}