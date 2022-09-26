/*
Drawing a chinese character "wang" with array;

graphic example:

*****
  *
*****
  *
*****
*/

#include <stdio.h>
#include <stdlib.h>

int main(void)
{
	char a[5][5];
	int i,j;
	for(i = 0;i < 5;i++)
	{
		for(j = 0;j < 5;j++)
		{
		if(i % 2 != 0 && j != 2)
			a[i][j] = ' ';
		else
			a[i][j] = '*';
		}
	}


	for(i = 0;i < 5;i++)
	{	
		for(j = 0;j < 5;j++)
			printf("%c",a[i][j]);
		printf("\n");
	}
	return 0;
}