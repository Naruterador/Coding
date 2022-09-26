#include<stdio.h>

#include<math.h>

int main(void){
	int a = 1;
	int b = 2;
	int c = 3;
    double detal = (b*b)-(4*a*c);
    double x1,x2;
    char * words = "This equation has no answer!";
    double sdetal = sqrt(detal);

	if (detal > 0){
		x1 = (-b + sdetal) / (2 * a);
		x2 = (-b - sdetal) / (2 * a);
		printf("x1=%f,x2=%f",x1,x2);
	}
	else if(detal == 0){
		x1 = (-b + sdetal) / (2*a);
		//x2 = x1;
		printf("x1=%f",x1);
	}
	else{
   	printf("%s",words);
	}
	return 0;
}