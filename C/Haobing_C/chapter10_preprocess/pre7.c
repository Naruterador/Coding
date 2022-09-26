#define sqr(x) x*x
#include <stdio.h>
int main(void)
{
	int x = 16/sqr(4);
	printf("%d", x);
}
