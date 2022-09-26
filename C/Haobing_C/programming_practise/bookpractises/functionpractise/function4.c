/*
Writing a program to judege if a number is a prime number or not.
*/

#include <stdio.h>

bool prime(int n)
{
	int i;
	if(n > 0)
	{
		for(i = 2;i < n;i++)
		{
			if(n % i == 0)
				break;
		}
		if(i == n)
			return true;
		else
			return false;
	}
	else
		return false;

}










int main(void)
{
	int n = 11;
	if(prime(n))
		printf("yes\n");
	else
		printf("no\n");





	return 0;

}