/*
Classic pointer program about changing the number between two vaiable;
 */

void exchang_1(int,int);
void exchang_2(int *,int *);
void exchang_3(int *,int *);



int main(void)
{
	int a,b;
	a = 3;
	b = 5;
	exchange_3(&a,&b);
	printf("a = %d,b = %d",a,b);
	return 0;
}


//The function is the correct one.
#include <stdio.h> 
void exchange_3(int * p,int * q)
{
	int t;
	t = *p;
	*p = *q;
	*q = t;
	return;
}

//This funciton can not finish the work for exchaning the number;
//The function just exchange the P and q.
void exchange_2(int * p,int * q)
{
	int * t;
	 t = p;
	 p = q;
	 q = t;

	return;
}


//This function can not finish the work for exchanging the number;
void exchange_1(int a,int b)
{
	int t;
	t = a;
	a = b;
	b = t;
    return;
}

