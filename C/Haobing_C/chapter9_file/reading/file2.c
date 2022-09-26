#include <stdio.h>

int main(void)
{
	char c;
	FILE *fptr;
	fptr = fopen("myfile.txt","r");

	while(!feof(fptr))
	{
		c = fgetc(fptr);
		printf("%c",c);
	}
	fclose(fptr);
	return 0;
}