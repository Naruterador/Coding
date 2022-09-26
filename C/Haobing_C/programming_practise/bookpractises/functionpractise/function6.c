/*
Writing a program to connect two string without using function of strcat;
*/



#include <stdio.h>
#include <string.h>
#include <stdlib.h>

char * strconnect(char * str1,char * str2)
{
	int sl1,sl2,len,i,j;
	sl1 = strlen(str1);
	sl2 = strlen(str2);
	len = sl1 + sl2;
	char * str3 = (char *)(malloc(sizeof(char)* len));
	for(i = 0;i < sl1;i++)
		if(str1[i] != '\0')
			str3[i] = str1[i];

	for(j = 0;j < sl2;j++,i++)
		if(str2[j] != '\0')
			str3[i] = str2[j];
		
	return str3;
}



int main(void)
{
	int i;
	char str1[10] = "ABCD";
	char str2[20] = "EFGH";
	char * str3;
	str3 = strconnect(str1,str2);
	printf("%s\n",str3);
	free(str3);
	return 0;
}
