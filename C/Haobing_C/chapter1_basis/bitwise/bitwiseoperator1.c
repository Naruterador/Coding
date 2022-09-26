/*
An example of bitwise operator. 
 */



#include <stdio.h>
int main(void)
{
	int i = 5;
	int j = 7;
	int f = -3;
	int k;
	char a;
	a = 'a';

	printf("%d\n",a);

	k = i & j;
	printf("%d\n",k);

	k = i | j;
	printf("%d\n",k);

	k = i && j;
	printf("%d\n",k);

	k = ~f;
	printf("%d\n",k);


	k = f<<1;
	printf("%d\n",k);






	return 0;
}