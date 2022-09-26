/*

Bubble algorithm

Ascending order:from small to large    exp:1,2,3,4,5,6
 
Descending order:from large to small   exp:10,9,8,7,6,5

train of thought:

Descending order:
	if a<b exchange the value of a and b;
	if a<c exchange the value of a and c;
	if b<c exchange the value of b and c;
Aescending order:
	if a>b exchange the value of a and b;
	if a>c exchange the value of a and c;
	if b>c exchange the value of b and c;

 */

#include <stdio.h>
int main(void){
	printf("Please input three numbers![mode:num1,num2,num3]\n");
	int a,b,c,t;
	scanf("%d,%d,%d",&a,&b,&c);

	if(a<b){
		t = a;
		a = b;
		b = t;
	}
	if(a<c){
		t = a;
		a = c;
		c = t;
	}
	if(b<c){
		t = b;
		b = c;
		c = t;

	}
	printf("The order number is %d,%d,%d",a,b,c);
	return 0;
}