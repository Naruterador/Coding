/*
Writing 10 integer numbers elect all the even number to store into another array;
*/


#include <stdio.h>
#include <stdlib.h>



int main(void)
{

	int arr1[10],i,n;
	int * arr2 = (int *)(malloc(sizeof(int) * 50));

	for(i = 0;i < 10;i++)
	{
		printf("Please input the %d number:\n",i+1);
		scanf("%d",&n);
		arr1[i] = n;
		if(arr1[i] % 2 == 0)
			arr2[i] = arr1[i];
		else
			arr2[i] = 0;
		printf("%d ",arr2[i]);
	}
	free(arr2);
	return 0;
}