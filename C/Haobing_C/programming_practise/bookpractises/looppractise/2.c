/*
Calculating the sum of 2+4+6+.....200;
 */

#include <stdio.h>
int main(void)
{
	int i,sum = 0;
	for(i = 0;i <= 200; i++)
	{
		if(i%2 == 0)
			sum+=i;
		else
			continue;
	}
	printf("%d",sum);



	return 0;
}