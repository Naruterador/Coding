/*
Taking the value from vaiable of struct;
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

	struct student st1 = {{'w','f'},'F',88,99.5f};
	struct student * pst1 = &st1;

	

	//pst1 -> age this expression converts the format of (*pst1).age to working in the system;
	//so pst1->age equal to (*pst1).age equal ot st1.age;
	pst1 -> age = 100;
	pst1 -> grade = 66.6f; //the default type of 66.6 is the type of double,
						   //if you wanna a real number be stored by float,you must add a f or F at the end of the number,
						   //so 66.6 is double type,but 66.6f or 66.6F is float;
	printf("%f %f",pst1 ->grade,st1.grade);
	









	return 0;
}