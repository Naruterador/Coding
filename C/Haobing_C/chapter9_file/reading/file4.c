#include <stdio.h>

int main(void)
{
	char str1[10],str2[10],str3[10],str4[10];
	int year = 0;
	FILE *fptr;
	fptr = fopen("file.txt","r");

	fscanf(fptr,"%s %s %s %s %d",str1,str2,str3,str4,&year);

	printf("1.%s",str1);
	printf("2.%s",str2);
	printf("3.%s",str3);
	printf("4.%s",str4);
	printf("5.%d",year);

	fclose(fptr);






	return 0;
}