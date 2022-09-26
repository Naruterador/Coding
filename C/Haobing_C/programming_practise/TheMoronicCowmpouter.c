/*
Decimalism convert to n.
 */


#include <stdio.h>
#include <malloc.h>

//the function of converting decimalism to binary;


void convert10ton(int a,int n)
{
	int i,j,t = 0;
	int * PArr;

	while(a > 0)
	{
		PArr = (int *)(malloc(sizeof(int) * i));
		t = a % n;
		a = a / n;
		PArr[i] = t;
		printf("%d",PArr[i]);
		i++;
	}

}


int main(void)
{
	int a = 128;
	int b = 2;
	convert10ton(a,b);
	return 0;
}