/*
A basic struct of a student.
Three approaches to declare a sturct
 */

#include <stdio.h>

int main(void)
{
	//First approach     The best approach
	struct student
	{

		char name[50];
		char gender;
		int age;
		float grade;
	}; 
    struct student st = {{'w','f'},'F',80,99.5};

    //Second approach
    struct student2
    {
    	char name[50];
	char gender;
	int age;
	float grade;
    } st2;

    //Third approach
      struct 
    {
    	char name[50];
	char gender;
	int age;
	float grade;
    } st3;



	return 0;
}
