/*
Creating a string and judging if the first char of the string is letters
The string can only contain letters,numbers and underline;
 */


#include <stdio.h>
#include <string.h>
#include <stdlib.h>

int main(void)
{
 char string1[8];
 char s1[]="This string starts with a lettter.\n";
 char s2[]="This string doset starts with a lettter.\n"; 
 int i;
 printf("Please input 8 characters:\n");
 fgets(string1,9,stdin);
 if((string1[0] >= 65 && string1[0] <= 90) || (string1[0] >= 97 && string1[0] <= 122))
 	printf("%s",s1);
 else
 	printf("%s",s2);

for(i = 0;i < 8;i++)
{
	if(string1[i] >= 65 && string1[i] <= 90);
	else if(string1[i] >= 97 && string1[i] <= 122);
	else if(string1[i] >= 48 && string1[i] <= 57);
	else if(string1[i] == 95);
	else
	printf("illegal letter %c\n",string1[i]);
}
	return 0;
}