#include <stdio.h>
#include <stdlib.h>
#include <errno.h>
#include <string.h>
extern int errno;
int main(void)
{
	FILE *fptr;
	errno = 0;

	fptr = fopen("c:\\nonexistantfile.txt", "r");

	if (fptr == NULL) 
	{
 	 perror("Error");
  	 fprintf(stderr, "%s\n", strerror(errno));
 	 exit(EXIT_FAILURE);
	}


/*
	for (int x = 0; x < 135; x++)
  		fprintf(stderr, "%d: %s\n", x, strerror(x)); 

*/

	return 0;
}