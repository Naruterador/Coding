/*
Coverting captial letters to lower letters;
 */


#include <stdio.h>

int main(void)
{
	char ch;


 do
   {
	char a;
	printf("Please input a letter:(A-Z)\n");
	scanf(" %c",&a);
	if(a >= 'A' && a <= 'Z')
	//if(a >= 65 && a <=90)      Tow approaches to write;
		printf("%c\n",a+32);
	else
		printf("Please write a captial letter\n");
	printf("Do you wanna continue?(Y/N)");
	scanf(" %c",&ch);
   }while(ch == 'Y' || ch =='y');





	return 0;
}

