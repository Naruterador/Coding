/*
Writing a array to reverse the elements of array then output them;
 */

#include <stdio.h>

int main(void)
{
	int arr[6],i,n,j=0,x = 4,t = 0;
	for(i = 0;i < 6;i++)
	{
		printf("Please input the %d number:\n",i+1);
		scanf("%d",&n);
		arr[i] = n;
	}
	printf("\n\n");

	i = 5;
	while(x > 1)
	{
		t = arr[i];
		arr[i] = arr[j];
		arr[j] = t;
		x--;
		i--;
		j++;
	}
	
	for(i = 0;i < 6;i++)
	{
		printf("%d\n",arr[i]);
	}




	return 0;
}