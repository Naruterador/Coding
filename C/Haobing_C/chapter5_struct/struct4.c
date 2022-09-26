/*
struct variable and pointer of struct variable passes as the function's parameter.
 */

#include <stdio.h>
#include <string.h>


//void Inputstudent(struct student);
//void Outputstudent(struct student);

void Inputstudent(struct student *);
void Outputstudent(struct student *);

struct student 
	{	
		char name[50];
		char gender;
		int age;
		float grade;

	};


int main(void)
{
	

	struct student stu;
	Inputstudent(&stu);
	//printf("%s %c %d %f",stu.name,stu.gender,stu.age,stu.grade);
	Outputstudent(&stu);
	return 0;
}


void Inputstudent(struct student * pstu)
{
	//strcpy((*pstu).name,"dn");
	strcpy(pstu ->name,"dn");    //The approach how to assign a value to a variable of string type.
	pstu ->gender = 'F';
	pstu ->age = 15;
	pstu ->grade = 99.5f;
}



void Outputstudent(struct student * pstu)
{
	printf("%s %c %d %f",pstu->name,pstu->gender,pstu->age,pstu->grade);
}


/*
This function is not a efficient approach to print out the result.
void Outputstudent(struct student st)
{
	printf("%s %c %d %f",st.name,st.gender,st.age,st.grade);
}
*/


/*
This function can not change the value of student struct;
void Inputstudent(struct student st)
{
	strcpy(st.name,"dn");
	st.gender = 'F';
	st.age = 15;
	st.grade = 99.5f;
}
*/