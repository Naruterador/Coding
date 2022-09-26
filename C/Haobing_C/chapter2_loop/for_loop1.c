/*
Calculating the sum of 1+1/2+1/3+1/4+............................1/100.
*/


#include <stdio.h>
int main(void)
{
	int x;
	float sum;
	for (x = 1;x <= 100;x++)
		sum = sum + (1.0/x);      
		//sum = sum + 1/(float)(x);                 Do not recommand to use this codes.
	printf("sum = %f\n",sum);
	return 0;
}