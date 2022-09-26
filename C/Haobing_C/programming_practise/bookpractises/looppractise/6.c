/*
Calculating the sum of 1/2-2/3+3/4-4/5-5/6+.....+79/80;
 */



#include <stdio.h>
int main(void)
{
	int i,t = 1;
	float s = 0;
	for(i = 1;i<=79;i++);
	{
		s = s+t*i/(i+1.0);
		t = -t;
	}
	printf("s = %f",s);
	return 0;
}