/*
Writing a program to add one string to another string's last.
*/

#include <stdio.h>
#include <stdlib.h>
#include <string.h>


/*
void stradd(char * s1,char * s2)
{
	int len1,len2;
	int i,j = 0;
	len1 = strlen(s1);
	len2 = strlen(s2);
	for(i = len1;i < len1 + len2;i++)
	{
		s1[i] = s2[j];
		j++;

	}
}
*/

void stradd(char * s1,char * s2)
{
	int len1,len2,len3;
	int i,j = 0;
	len1 = strlen(s1);
	len2 = strlen(s2);
	len3 = len1 + len2;
	char * s3 =(char *)(malloc(sizeof(char) * len3));
	s3 = s1;
	for(i = len1;i < len3;i++)
	{
		s3[i] = s2[j];
		j++;
	}
}


int main(void)
{
	
	char str1[] = "abcd";
	char str2[] = "efgh";
	stradd(str1,str2);
	printf("%s\n",str1);
	return 0;
}