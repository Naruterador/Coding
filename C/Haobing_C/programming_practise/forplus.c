/*
Writing a program to sum the number of 1+2+3......+1000;
 */


#include <stdio.h>

int main(void)
{
	int i;
	int sum = 0;
	for (i = 1;i<=1000;i++)
		sum +=i;
	printf("%d",sum);
	return 0;
}