/*
An example of enumeration.
 */

#include <stdio.h>



int main(void)
{
	enum weekday1s 
	{
		Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday
	};

/*
	enum weekday2s 
	{
		Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday
	};

*/


	enum weekday1s day1 = Wednesday;
	//enum weekday2s day2 = Wednesday;

	printf("%d\n",day1);
	//printf("%d\n",day2);







	return 0;
}