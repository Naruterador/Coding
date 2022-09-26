#include <stdio.h>

int main(void){

	printf("Please input you score:\n");

	int i;
	//char ch;

	scanf("%d",&i);

		if ((i >= 90) && (i <= 100)){
			printf("A\n");
		}
		else if ((i >= 80) && (i <= 80)){
			printf("B\n");
		}
		else if ((i >= 60) && (i <= 70)){
			printf("C\n");
		}
		else if ((i >= 0) && (i <= 60)){
			printf("D\n");
		}
		else {
			printf("Please input the correct form of score.\n");

		}


}