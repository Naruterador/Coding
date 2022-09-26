#include <stdio.h>

int main(void){
	int i = 10;
	int k = 20;
	int m;
	m = (3>2) && (k=8);
	//m = (3>2) && (k=0);
	//m = (1>2) && (k=5); running result: m = 0,k=20
	printf("m = %d,k = %d",m,k);









}