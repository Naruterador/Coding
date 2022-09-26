/*
An example of dynamic array.
 */

#include <stdio.h>
#include <malloc.h>

int main(void)
{
	int a[5];
	int * PArr;
	int len;
	int i;

	PArr = (int *)(malloc(4 * len)); //Declaring a dynamic array which has 5 elements and 20 bytes of ram.
								     //This expression equal int PArr[len];

	printf("Please input the count of this dynamic array:\n");
	scanf("%d",&len);


	printf("Please input the elements:\n");
	for(i = 0;i < len; i++)
		scanf("%d",&PArr[i]);

	for(i=0;i < len; i++)
		printf("%d\n",PArr[i]);

	free(PArr); //Realeasing the spaces of PArr

	return 0;
}
