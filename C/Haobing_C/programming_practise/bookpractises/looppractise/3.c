/*
Calculating the sum of 2/(2*4)+4/(5*6)+6/(7*8)+.....20/(21*22);
 */


#include <stdio.h>

int main(void)
{
	int i = 2;
	float sum = 0;
	for(i = 2;i <= 20;i++)
	{
		if(i % 2 == 0)
		{
		 sum = sum + i/((i+1*1.0)*(i+2));
		}
	}
	printf("%0.2f",sum);
	return 0;
}

