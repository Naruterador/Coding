#include <stdio.h>

int main(void)
{
   FILE *fp;

   fp = fopen("file.txt","w+");
   fputs("This is runoob.com", fp);
  
   fseek( fp, 7, SEEK_SET );
   fputs(" C Programming Langauge", fp);
   fclose(fp);
   
   return(0);







	return 0;
}