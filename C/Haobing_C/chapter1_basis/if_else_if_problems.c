/*
This Program will give you a compiled problem,because the first if body
has 2 codes that out of the area of if. 




 */


#include <stdio.h>
int main(void){

	int i = 10;

	if (i>0)
		printf("AAAAAA\n");
		printf("DDDDD\n");
	else if (i < 0)
		printf("BBBBBB\n");
	else
		printf("CCCCCCC\n");

}