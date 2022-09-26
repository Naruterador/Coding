/*
Calculating the sum points of Singing competition.
 */

#include <stdio.h>

int main(void)
{
	int i = 0;
	float n,sum = 0,fin,max = 0,min = 0;
	printf("Please inputting a number:\n");
	scanf("%f",&n);
	sum = n;
	min = max = n;
	while(i < 9)
	{
		printf("Please inputting a number:\n");
		scanf("%f",&n);
		n = (int)(n * 10) / 10;
		if(n >= 0 && n <=10)
		{
			if(n > max)
				max = n;
			if(n < min)
				min = n;
			sum += n;
		}
		i++;
	}
	fin = (sum-(max+min)) / 8;
	printf("%0.2f\n",fin);
	return 0;
}