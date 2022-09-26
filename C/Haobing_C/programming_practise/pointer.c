#include <stdio.h>

void fun(char * a,char * b)
{
	a = b;
	(*a)++;
}






int main(void)
{

char c1 = 'A',c2 = 'a',*p1,*p2;
p1 = &c1;
p2 = &c2;

fun(p1,p2);
printf("%c,%c",c1,c2);





	return 0;
}