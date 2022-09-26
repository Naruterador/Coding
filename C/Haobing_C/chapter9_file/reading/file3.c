#include <stdio.h>

int main(void)
{
	char c;
	char buffer[100];
	FILE * fptr;
	fptr = fopen("myfile.txt","r");
	fgets(buffer,10,fptr);
	printf("%s",buffer);
	

	while ((c = getc(fptr)) != EOF) /* read the rest of the file */
    printf("%c", c);

 	fclose(fptr);

	return 0;
}