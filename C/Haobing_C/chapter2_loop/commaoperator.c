/*
The example of comma operator.
 */

#include <stdio.h>
int main(void)
{
	 int i;
	 int j = 2 ;
	 i = (j++,++j,j+2,j-3);
	 printf("%d",i);
}


/*
the output is 1;

because j+2 is not a calculation that do not assign.

 */