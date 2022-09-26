/*
Calculating the sum of odd numbers between 1 to 10.
Calculating the count of odd numbers between 1 to 10.
*/


#include <stdio.h>
int main(void){
	int x;
	int sum;
	int y = 0;

	for(x = 1; x <= 10; x++)
		if(x%2 != 0)
		{
			sum += x;
			y++;
		}

	printf("sum = %d\n",sum);
	printf("count = %d\n",y);
	return 0;

}