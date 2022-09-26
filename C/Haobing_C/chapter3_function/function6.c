/*
Calculating the sum of prime numbers between 1 to n;
 */
#include <stdio.h>

bool Isprime(int val)
{
	int i;
	for(i = 2;i < val; i++)
	{
		if(val % i == 0)
			break;
	}

	if(val == i)
		return true;
	else
		return false;
}

int Sumprime(int n) 
{
	int i;
	int sum;
	for(i = 2;i < n; i++)
		if(Isprime(i))
			sum += i;
	return sum;
}

int main(void)
{
	int result;
	int num;
	printf("Please input a number:");
	scanf("%d",&num);
	result = Sumprime(num);
	printf("Sum = %d",result);

	return 0;
}