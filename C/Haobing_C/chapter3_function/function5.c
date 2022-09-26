/*
Declaring a function;
 */


 /*
 The proposed declaring of function;
  */
 
 #include <stdio.h>

int f(void); //Format of how to declare a proposed declaring of function;

void g(void)
{
	f();
}


int f(void)
{
	printf("Test\n");
}




int main(void)
{	
	g();

	return 0;
}