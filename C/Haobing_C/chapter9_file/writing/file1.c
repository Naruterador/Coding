#include <stdio.h>

int main(void)
{
	FILE * fptr;
	char buffer[100];
	char filename[50];
	char strings[100];
	char c;
	printf("Please enter the filename:");
	//scanf("%s",filename);
	gets(filename);
	fptr = fopen(filename,"w");

	printf("please input something:");
	//scanf("%c",&c);
	//fputc(c,fptr);
	
	scanf("%s",strings);
	fputs(strings,fptr);
	fclose(fptr);

	
	





	printf("\n");

	fptr = fopen(filename,"r");
	fgets(buffer,10,fptr);
	printf("%s",buffer);








	return 0;
}