/*
Inputing a string and counting the sum of all characters and captial characerts.
*/

#include <stdio.h>
#include <stdlib.h>

int main(void)
{
	int i = 0;
	int cap = 0;
	int all = 0;
	char * input = (char *)(malloc(sizeof(char) * 50));
	printf("Please input a string:\n");
	scanf("%s",input);

	for(i = 0;i < 50;i++)
	{

		if(*(input+i) == '\0')
			break;
		if(*(input+i) >= 65 && *(input+i) <= 90)
			cap++;
		all++;

	}

//wrong approach
/*
	while(*input++ != '\0')
	{
		if(*input >= 65 && *input <= 90)
			cap += 1;
		all++;
	}
*/

	printf("cap = %d\nall = %d\n",cap,all);
	return 0;
}