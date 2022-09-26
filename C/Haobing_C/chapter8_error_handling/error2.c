#include <stdio.h>
#include <stdlib.h>
#include <errno.h>

extern int errno;

int main(void) 
{
  FILE *fptr;
  int c;

  errno = 0;
  fptr = fopen("c:\\nonexistantfile.txt", "r");
  if (fptr == NULL) 
  {
    fprintf(stderr, "Error opening file. Error code: %d\n", errno);
    exit(EXIT_FAILURE);
  }

  fclose(fptr);
  return 0;
} 