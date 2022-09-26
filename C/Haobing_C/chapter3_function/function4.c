/*
Write function of prime number
The defination of the prime number:
The number only can be exactly divided by 1 or itself that we can call it prime number.
 */

#include <stdio.h>


bool prime(int val)
{
	int x;

	for (x = 2;x < val;x++)
	{
		if(val%x == 0)
			break;
	}
	if(val == x)
		return true;
	else
		return false;
}


int main(void)
{
	int val;
	printf("Please input a number:");
	scanf("%d",&val);
	if(prime(val))
		printf("YES\n");
	else
		printf("NO\n");


}