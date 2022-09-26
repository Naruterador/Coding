/*
Inputting a array to store into a array and showing the length of the string,then copies the string to the another string array
outputing the second array;
 */

#include <stdio.h>
#include <string.h>


int main(void)
{
	char string1[20];
	char string2[20];
	int length = 0;
	printf("Please input a string:\n");
	fgets(string1,20,stdin);
	length = strlen(string1)-1;
	printf("The length of the string1 is:%d\n",length);
	strcpy(string2,string1);
	if(strcmp(string1,string2))
		fputs(string2,stdout);
		//printf("%s",string2);
	else
		printf("The value between two strings is different\n");
	return 0;
}