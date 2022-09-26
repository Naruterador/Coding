/*
Inputing 10 integer numbers then exchanging the each last number and the first number;
*/

#include <stdio.h>

int main(void)
{
	int a[10];
	int i,j = 10,t;
	printf("Please enter ten numbers:\n");
	for(i = 0;i < 10;i++)
	{
		printf("a[%d] = ",i+1);
		scanf("%d",&*(a+i));
	}


	for(i = 0;i < 5;i++)
	{
		t = a[i];
		a[i] = a[j-1];
		a[j-1] = t;
		j--;
	}



	for(i = 0;i < 10;i++)
		printf("%d\n",*(a+i));







	return 0;
}