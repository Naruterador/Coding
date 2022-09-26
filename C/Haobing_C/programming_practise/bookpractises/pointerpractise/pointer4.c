/*
Writing a program copy the one string to another string.
*/

#include <stdio.h>
#include <string.h>

void strcopy(char * s1,char * s2)
{
	int len,i;
	len = strlen(s1);
	for(i = 0;i < len;i++)
	{
		*(s2 + i)= *(s1 + i);
		//s2[i] = s1[i];
	}
}


int main(void)
{


 	char str1[10] = "abcd";
 	char str2[10];
 	strcopy(str1,str2);
 	printf("%s\n",str2);

	return 0;
}