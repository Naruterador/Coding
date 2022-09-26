/*
Calculating the sum of even number startd from 2 to n,
n is inputted by user;
 */

#include <stdio.h>

int main(void)
{
    printf("Please input a number:");
    int i,sum = 0,n;
    scanf("%d",&n);
    for(i = 0;i <= n;i++)
    {
    	if(i % 2 == 0)
    	{
    		sum += i;
    	}

    }

    printf("sum = %d",sum);







	return 0;
}