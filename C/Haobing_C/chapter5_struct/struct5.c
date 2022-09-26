/*
Constructing the dynamic information of students' struct array.
1.Constructing a dynamic array to store the information of students.
2.Sorting the grades and outputing the consequences.
 */

#include <stdio.h>
#include <malloc.h>
#include <string.h>

struct student
{
	char * name;
    char gender;
    int age;
    float grade;
};

void Inputstudent(int count,struct student * PStu)
{
	int i;
	for (i = 0;i<count;i++)
	{
		printf("Please enter the information of the  %d student:\n",i+1);

		PStu[i].name = (char *)malloc(sizeof(char) * 50);
		printf("name = ");
		char chr[50]; //Creating 50 bytes buffer spaces;
		scanf("%s",&chr[50]); //Writing into the buffer;
		strcpy(PStu[i].name,chr); //The format of strcpy(destiation,source);
		//gets() //get string
		//getchar() //get char
		printf("gender(F/M) = ");
		scanf(" %c",&PStu[i].gender); 
		printf("age = ");
		scanf("%d",&PStu[i].age);
		printf("grade = ");
		scanf("%f",&PStu[i].grade);
	}
}


void sort(int count,struct student * PStu)
{
	struct student t;
	int k,j = 0;
	for (k = 0;k < count - 1;k++)
		for(j = 0;j<count - 1 - k;j++)
		{
			if(PStu[j].grade > PStu[j+1].grade)
			{
				t = PStu[j];
				PStu[j] = PStu[j+1];
				PStu[j+1] = t; 
			}

		}
}


void Outputstudent(int count,struct student * PStu)
{

	int i = 0;
	sort(count,PStu);
	for (i = 0;i<count;i++)
	{
		printf("The information of the  %d student:\n",i+1);
		printf("name = %s\n",PStu[i].name);
		printf("gender(F/M) = %c\n",PStu[i].gender);
		printf("age = %d\n",PStu[i].age);
		printf("grade = %f\n",PStu[i].grade);
		printf("\n\n");
	}
}


int main(void)
{
	int count = 0;
	struct student * PStu;
	PStu = (struct student *)(malloc(count * sizeof(struct student)));
	printf("Please enter the count of students %d:\n",count);
	printf("count = ");
	scanf("%d",&count);
	Inputstudent(count,PStu);
	Outputstudent(count,PStu);
	return 0;

}