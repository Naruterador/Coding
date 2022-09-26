/*
Calculating the average of odd numbers between 1 to 10;
 */

#include <stdio.h>
int main(void)
{
	int x;
	int y = 0;
	int sum;
	float ave;
	for (x = 1;x <= 10 ; x++)
	{
		if(x%2!=0)
		{
			sum += x;
			++y;
		}

	}
	ave = 1.0 * sum / y;   //default data type of 1.0 is double
	//ave = sum / (float)(y);
	printf("ave = %f",ave);
	return 0;
}