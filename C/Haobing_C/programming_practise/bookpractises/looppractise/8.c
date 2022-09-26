/*
Inputting the grade to calculate the sum grade ,average grade,the maximum grade and the minimum grade;
 */


#include <stdio.h>

int main(void)
{
	int i = 1,n,max = 0,min = 0,sum = 0;
	float ave;
	printf("Please input your grade:\n");
	scanf("%d",&n);
	sum = n;
	min = max = n;
   do 
    {
		printf("Please input your grade:\n");
		scanf("%d",&n);
		if(n >= 0)
		{	
			sum += n;
			if(n > max)
				max = n;
			if(n < min)
				min = n;
			i++;
			ave = sum / i*1.0;
		}
	}while(n != -1);
	printf("sum = %d,ave = %f,min = %d,max = %d",sum,ave,min,max);
	return 0;
}