#include <stdio.h>

int main(void)
{
FILE *fptr;

fptr = fopen("myfile.txt","r");

	if(fptr == NULL)
	{
		printf("Can not open file");
		return -1;
	}
	printf("open file successfully!\n");
	fclose(fptr);

	return 0;

}