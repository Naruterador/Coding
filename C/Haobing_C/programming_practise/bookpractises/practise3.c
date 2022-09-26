/*
Outputing the number between 200~300 what can be divided by 7.
each line outputs 5 numbers.
*/

#include <stdio.h>

int main(void)


{
	int i = 200,n =0;

	while((i >= 200) && (i <= 300))
	{
		if(i%7==0)
		{
			printf("%d ",i);
			n++;
			if(n%5 == 0)
				printf("\n");
		}
		i++;

	}
	printf("\n");






	return 0;
}