/*

The Football World Cup has 32 teams,write a draw system,separates 4 team as a group take out from 32 teams;

*/

#include <stdio.h>
#include <stdlib.h>

int main(void)
{

	
	int a[32] = {1,2,3,4,5,6,7,8,11,22,33,44,55,66,77,88,111,222,333,444,555,666,777,888,1111,2222,3333,4444,5555,6666,7777,8888};
	int tag = 31,j,i,t,n;
	for(i = 0;i < tag;i++)
	{
		for(j = 0;j < 4;j++)
		{
			n = rand()%tag;
			t = a[n];
			a[n] = a[tag];
			a[tag] = t;
			tag--;
			printf("%d\n",t);
		}
		printf("\n\n");
	}
	return 0;
}