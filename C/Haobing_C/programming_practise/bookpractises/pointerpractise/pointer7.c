/*
Entering 10 integers ,moving orderly the front numbers to rear of the array at k position and moving orderly the last k numbers to the front of the array.
*/


#include <stdio.h>
#include <stdlib.h>



void exchange(int * arr,int len,int s)
{
	int i,j = 0,x = 0; 
	s = 2;
	int t = 0;

	printf("Please enter %d numbers:\n",len);
    for(i = 0;i < len;i++)
    {
    	printf("The %d number.\n",i+1);
    	scanf("%d",&arr[i]);
    }

    printf("\n\n");


    for(i = 0;i < len - s;i++)
    {
    	for(x = 0;x < len - s - j;x++)
    	{
	    	t = arr[x+s];
	    	arr[x+s] = arr[x];
	    	arr[x] = t;
   	 	}
    	j += s;
    }

}

int main(void)
{
	int array[] = {1,2,3,4,5,6,7,8,9,10};
	int len = 10;
	int s = 2;
	int i = 0;
	exchange(array,len,s);

	for(i = 0;i < len;i++)
	{
		printf("%d\n",array[i]);
	}



	return 0;
}