/*
Calculating the sum of 1+2+3+4+5....+100 by using while loop;
 */


#include <stdio.h>
int main(void)
{
	int x;
	int sum;
	while (x < 101)
	{
		sum += x;
	    ++x;
	}
	printf("sum = %d",sum);
	return 0;
}