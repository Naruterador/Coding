/*
Judging a number if it is a palindrome or not.
if number  is palindrome output yes
if number  is not palindrome output no.
 */

#include <stdio.h>
int main(void)
{
	int val;
	int m;
	int sum = 0;
	printf("Please input a numer:\n");

	scanf("%d",&val);

	m = val;
	while(m)
	{
		sum = sum * 10 + m % 10;
		m /= 10;
	}

	if(sum==val)
		printf("YES!\n");
	else
		printf("NO!\n");

	return 0;
}

