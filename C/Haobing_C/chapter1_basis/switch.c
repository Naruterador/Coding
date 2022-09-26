/*
An example of switch/case;
 */


#include <stdio.h>
int main(void)
{
	int val;
	printf("Please input lay you wanna go:\n");
	scanf("%d",&val);

	switch(val)
	{
		case 1:
			printf("you are in 1st floor\n");
			break;
		case 2:
			printf("you are in 2nd floor\n");
			break;
		case 3:
			printf("you are in 3rd floor\n");
			break;
		default:
			printf("This build do not have this floor.\n");
			break;
	}
	return 0;
}