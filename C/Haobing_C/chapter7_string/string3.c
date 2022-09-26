/*
Wirting a line letters,summarise the count of words,spliting the each words by using space;
 */



#include <stdio.h>
#include <string.h>
#include <stdlib.h>

int main(void)
{
	/*
	my aproaches;
	char * string1 = (char *)(malloc(sizeof(char) * 50));
	int * length = (int * )(malloc(sizeof(int)));
	int i;
	int t = 1;
	printf("Please input your string:\n");
	fgets(string1,50,stdin);
	*length = strlen(string1);
	for(i = 0;i < *length-1;i++)
		if(string1[i] == ' ')
			t++;
	printf("Word: %d\n",t);
	*/

	//Instruction approach
	int i;
	char string1[50];
	char c;
	int num = 0;
	int wordflag = 0;
	printf("Please enter the a string:\n");
	fgets(string1,50,stdin);
	for(i = 0;(c = string1[i])!='\0';i++)
	{
		if(c == ' ')
			wordflag = 0;
		else if(wordflag == 0)
		{
			wordflag = 1;
			num++;
		}
	}
	printf("Word:%d\n",num);

	return 0;
}