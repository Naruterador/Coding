/*
Writing a 4*4 matrix finding the minimum value from the diagonal;

The format is like that:

5   6  7  8
9  10 11 12
13 14 15 16       a[3][0]   a[3][3]

*/


#include <stdio.h>

int main(void)
{
	int a[4][4],i,j,n,t = 0;
	for(i = 0;i < 4;i++)
		for(j = 0;j < 4;j++)	
		{
			printf("Please writing the %d number:\n",i+1);
			scanf("%d",&n);
			a[i][j] = n;
			if(i == 0 && j == 0)
				t = n;
			if(i == 0 && j == 3)
				if(n < t)
					t = n;
			if(i == 3 && i == 0)
				if(n < t)
					t = n;
			if(i == 3 && i == 3)
				if(n < t)
					t = n;
		}
	printf("Min = %d\n",t);
	return 0;
}