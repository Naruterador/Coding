/*
Caculating the value that x power y;
 */

#include <stdio.h>
#include <math.h>

double fun(double x,int y)
{
	int k;
	double z = 1;
	for(k = 1;k <= y;k++)
	{
		z *= x;
	}
	return z;
}




int main(void)
{
  double z;
  int x = 2,y = 3;
  z = fun(2,3);
  printf("z = %lf",z);
  return 0;
}








