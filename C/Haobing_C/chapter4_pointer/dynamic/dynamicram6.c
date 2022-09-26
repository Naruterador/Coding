/*
Declaring a dynamic two-dimension array;
 */

#include <stdio.h>
#include <stdlib.h>

int main(void)
{
	int **wang = (int **)malloc(sizeof(int) * 5);
	for(int i=0;i<5;i++)
	{
		wang[i] = (int*)malloc(sizeof(int) * 5);
	}

}