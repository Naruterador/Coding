/*
getchar() is used to receive the data of user from inputting of keyboard.
 */

#include <stdio.h>
int main(void){

	int i;
	char ch;
	scanf("%d",&i);

	printf("i = %d",i);



while((ch=getchar()) != '\n')
	continue;

	int j;
	scanf("%d",&j);
	printf("j = %d",j);

}