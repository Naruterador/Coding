#include <stdio.h>

int main(void){

	int x;
	int y;
	int t;

	scanf("%d %d",&x,&y);

	t = y;
	y = x;
	x = t;
	
	printf("x = %d,y = %d",x,y);
}