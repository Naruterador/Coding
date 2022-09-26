/*
Assigning and initialising the struct
 */

#include <stdio.h>
int main(void)
{

	struct student
	{
		char name[50];
		char gender;
		int age;
		float grade;
	};

	struct student st1 = {{'w','f'},'F',22,99.5};
	struct student st2 = {"dn"};
	st2.gender = 'm';
	st2.age = 25;
	st2.grade = 90.5;

	printf("%s\n",st2.name);
	printf("%c\n",st2.gender);
	printf("%d\n",st2.age);
	printf("%f\n",st2.grade);










	return 0;
}