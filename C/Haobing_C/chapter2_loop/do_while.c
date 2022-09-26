/*
Using do while to calculate the quadratic equation with one known;
 */


#include <stdio.h>
#include <math.h>

int main(void)
{
	char ch;
	do
	{
		double a,b,c;
		double x1,x2;
		double detal;
		char ch;

		printf("Please input three numbers as these format:a,b,c:\n");
		scanf("%lf,%lf,%lf",&a,&b,&c);

		detal = (b*b)-(4*a*c);

		if (detal > 0)
		{
			x1 = (-b + sqrt(detal)) / (2 * a);
			x2 = (-b - sqrt(detal)) / (2 * a);
			printf("The equation has 2 answers x1 = %lf,x2 = %lf\n",x1,x2);
		}
		else if(detal == 0)
		{
			x1 = -b + sqrt(detal) / 2 * a;
			printf("The equation has only 1 answer x = %lf\n",x1);
		}
		else
			printf("The equation has no answer\n");
		printf("Do you wanna continue?(Y/N)");
		scanf(" %c",&ch);       //we must add a space before the %c
	}while('y' == ch || 'Y' == ch );
	return 0;
}