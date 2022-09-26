/*
inputting a name and outputting from moniter;
*/

#include <string.h>
#include <stdio.h>

int main(void)
{
	char message[30] = "My name is ";
	char name[10];
	printf("Please input your name:\n");
	fgets(name,10,stdin);
	strcat(message,name);
	fputs(message,stdout);










	return 0;
}
