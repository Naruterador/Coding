/*
Typing a sting and counting how many capital letters lower letters number letters spaces and other letters inside it;
 */

#include <stdio.h>
#include <string.h>

int main(void)
{
	int c = 0 ,l = 0,n = 0,s = 0,o = 0;
	int em;

	int i;
	char string1[100];
	printf("Please write a string:\n");
	fgets(string1,101,stdin);
	em = strlen(string1);
	for(i = em - 1;i < 100;i++)
	{
		string1[i] = ' ';
	}
	for(i = 0;i < 100;i++)
	{
		if(string1[i] >=65 && string1[i] <=90)
			c += 1;
		else if(string1[i] >=97 && string1[i] <=122)
			l += 1;
		else if(string1[i] >=48 && string1[i] <=57)
			n += 1;
		else if(string1[i] == ' ')
			s += 1;
		else
			o += 1;
	}

	printf("c = %d,l = %d,n = %d,s = %d,o = %d",c,l,n,s,o);
	return 0;
}
