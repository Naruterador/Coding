#include <stdio.h>

int main(void)
{
   FILE * fp;

   fp = fopen ("file.txt", "w+");
   fprintf(fp, "%s %s %s %d", "We", "are", "in", 2014);
   
   fclose(fp);

   return 0;
}