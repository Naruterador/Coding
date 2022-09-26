/*
Calculating the Maximum common divisor of two numbers. 

5 1125 855           
9  255 171          
    25  19


6   24  36
2    4   6
     2   3

*/



#include <stdio.h>
int commondivisor(int a,int b)
{
	int t,i = 0,n;
	if(a>b)
	t = a;
	else
	t = b;

for(i = 2;i < t - 1;i++)
	if((a % i  == 0)  && (b % i == 0))
		n = i;
return n;	
}

int main(void)
{

	int a = 1125, b = 855,c;
	c = commondivisor(a,b);
	printf("c = %d\n",c);
	return 0;
}