/*
Calculating the sum of  number can be divide by 6 but can not be divided by 5 from 50 to 200 [50-200];
 */


#include <stdio.h>
int main(void)
{
	int i = 50,sum = 0;
	for (i = 50;i<=200;i++)
	{
		if((i % 6 == 0) && (i % 5 != 0))
			sum += i;
	}
	printf("sum = %d\n",sum);
	return 0;
}