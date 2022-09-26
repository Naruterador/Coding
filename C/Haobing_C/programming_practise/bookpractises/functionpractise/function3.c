/*
Writing a function input year,mouth and day,calculating which day of the year;
leap year = 366 days,common years = 365;
 */


#include <stdio.h>

int yearf(int year)
{
	if(year % 4 == 0 && year % 100 != 0)
		return true;
	else if(year % 400 == 0)
		return true;
	else
		return false;
}


int fun(int year,int mouth,int day)
{
	int a[12] = {31,28,31,30,31,30,31,31,30,31,30,31};
	int i;	
	int sum = 0,con = 1;
	if(yearf(year))
		a[1] = 29;
	else
		a[1] = 28;

	for(i = 0;i < mouth;i++)
	{
		sum += a[i];
	}
	con = sum - (a[mouth - 1] - day);
	return con;
}

int main(void)
{

	int year = 2000,mouth = 12,day = 31;
	int re = 0; 
	re = fun(year,mouth,day);
	printf("re = %d",re);

	return 0;
}