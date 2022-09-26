/*
Writing five students' name,school number,chinese grade,math grade and computer grade,then counting the sum of all grades of five students
and sort the grades from high to low,then output rank as their grade;
 */

#include <stdio.h>
#include <string.h>

int main(void)
{
	//student_information
	char name1[50],name2[50],name3[50],name4[50],name5[50];
	int  number1, number2, number3, number4, number5;
	int  ch_g = 0;
	int  ma_g = 0;
	int  com_g = 0;
	int  sumall;
	int i = 0;
	int k,j = 0,t,tt = 0;
	int s = 1;
	int a[5][5];


	//s1
	printf("Please input the %d student's information:\n",s++);
	printf("name: ");
	scanf("%s",&name1[50]);
	a[0][0] = j+=1; //school
	printf("Please enter your Chinese grade:\n");
	scanf("%d",&a[0][1]);
	printf("Please enter your Math grade:\n");
	scanf("%d",&a[0][2]);
	printf("Please enter your Computer grade:\n");
	scanf("%d",&a[0][3]);
	a[0][4] = a[0][1]+a[0][2]+a[0][3]; //amount scores of one sutdent;
	
	//s2
	printf("Please input the %d student's information:\n",s++);
	printf("name: ");
	scanf("%s",&name2[50]);
	a[1][0] = j+=1; //school
	printf("Please enter your Chinese grade:\n");
	scanf("%d",&a[1][1]);
	printf("Please enter your Math grade:\n");
	scanf("%d",&a[1][2]);
	printf("Please enter your Computer grade:\n");
	scanf("%d",&a[1][3]);
	a[1][4] = a[1][1]+a[1][2]+a[1][3]; //amount scores of one sutdent;


	//s3
	printf("Please input the %d student's information:\n",s++);
	printf("name: ");
	scanf("%s",&name3[50]);
	a[2][0] = j+=1; //school
	printf("Please enter your Chinese grade:\n");
	scanf("%d",&a[2][1]);
	printf("Please enter your Math grade:\n");
	scanf("%d",&a[2][2]);
	printf("Please enter your Computer grade:\n");
	scanf("%d",&a[2][3]);
	a[2][4] = a[2][1]+a[2][2]+a[2][3]; //amount scores of one sutdent;

	//s4
	printf("Please input the %d student's information:\n",s++);
	printf("name: ");
	scanf("%s",&name4[50]);
	a[3][0] = j+=1; //school
	printf("Please enter your Chinese grade:\n");
	scanf("%d",&a[3][1]);
	printf("Please enter your Math grade:\n");
	scanf("%d",&a[3][2]);
	printf("Please enter your Computer grade:\n");
	scanf("%d",&a[3][3]);
	a[3][4] = a[3][1]+a[3][2]+a[3][3]; //amount scores of one sutdent;

	//s5
	printf("Please input the %d student's information:\n",s++);
	printf("name: ");
	scanf("%s",&name5[50]);
	a[4][0] = j+=1; //school
	printf("Please enter your Chinese grade:\n");
	scanf("%d",&a[4][1]);
	printf("Please enter your Math grade:\n");
	scanf("%d",&a[4][2]);
	printf("Please enter your Computer grade:\n");
	scanf("%d",&a[4][3]);
	a[4][4] = a[4][1]+a[4][2]+a[4][3]; //amount scores of one sutdent;



	for(k = 0;k < 4;k++)
		for(j = 0;j< 4 - k;j++)
		{
			if(a[j][4] < a[j+1][4])
			{

				t = a[j][4];
				a[j][4] = a[j+1][4];
				a[j+1][4] = t;

				tt = a[j][0];
				a[j][0] = a[j+1][0];
				a[j+1][0] = tt;				

			}


		}


for(i = 0;i < 5;i++)
{
	printf("The rand of studnet is school number: %d,score : %d\n",a[i][0],a[i][4]);
}

	return 0;
}