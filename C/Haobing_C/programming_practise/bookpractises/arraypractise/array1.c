/*
Inputting the 20 numbers and finding out the maximum and minimum number.
*/


#include <stdio.h>
int main(void)
{

	int a[5],i,max=0,min=10000,n;
	for(i = 0;i < 5;i++)
	{
		printf("Please input a number:\n");
		scanf("%d",&n);
		a[i] = n;
		if(n > max)
			max = n;
		if(n < min)
			min = n;
	}
	printf("Max = %d,Min = %d\n",max,min);






	return 0;
}