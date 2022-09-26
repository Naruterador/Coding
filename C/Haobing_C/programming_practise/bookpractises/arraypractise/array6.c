/*
Writing 10 integer numbers and sorting the array from big to small;
 */

#include <stdio.h>

int main(void)
{
	printf("Please input 10 numbers in array:\n");
	int i = 0,j,t,a[10];
	for(i = 0;i < 10;i++)
		scanf("%d",&a[i]);

	printf("\n\n");

	for(i = 0;i < 10 - 1 ;i++)
		for(j = 0;j < 10-1-i;j++)
		{
			if(a[j] > a[j+1])
			{
				t = a[j];
				a[j] = a[j+1];
				a[j+1] = t;
			}
		}		

	for(i = 0;i < 10;i++)
		printf("%d\n",a[i]);

	return 0;
}