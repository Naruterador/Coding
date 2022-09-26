/*
Showing the grade level;
 */

#include <stdio.h>
int main(void)
{
	int g;
 do
    {
	printf("please enter your grade:\n");
	scanf("%d",&g);
	if(g >= 90 && g <= 100)
		printf("A\n");
	else if (g >= 80 && g <= 89)
		printf("B\n");
	else if (g >=70 && g <= 79)
		printf("C\n");
	else if (g >= 60 && g<=69)
		printf("D\n");
	else 
		printf("E\n");
    }while(g != -1 );
	return 0;
}