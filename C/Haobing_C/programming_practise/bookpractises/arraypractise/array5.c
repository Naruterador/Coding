/*
Writing a string and changing the captial letters into lower letters from this string.
*/


#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main(void)
{
	char * string1 =(char *)(malloc(sizeof(char) * 50));
	int len = 0,i;
	printf("Please input a string:\n");
	scanf("%s",string1);
	len = strlen(string1);
	for(i = 0; i < len; i++)
	{
		if(string1[i] >= 97)
			string1[i] = string1[i] - 32;
	}
	printf("%s",string1);

	return 0;
}