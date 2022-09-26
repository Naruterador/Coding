/*
A example of ++i and i++
 */

#include <stdio.h>
int main(void)
{
	int i;
	int j;
	int k;
	int m;

	i = j = 3;
	k = ++i;
	m = j++;

	printf("i = %d,j = %d,k = %d, m =%d",i,j,k,m);
	
	return 0;
}



/*
The result of the output is:
i = 4 , j = 4 ,k =4 , m = 3;
 */