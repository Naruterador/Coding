/*
Inputting ten numbers and electing one number randomly;
*/

#include <stdio.h>
#include <stdlib.h>


int main()
{
	int * a =(int *)(malloc(sizeof(int) * 10));
	int i,t,tag,value,v;
	printf("Please input 10 numbers");
	for(i = 0;i < 10;i++)
	{
		scanf("%d",&value);
		a[i] = value;

	}
	tag = 9;
	t = rand()%tag;
	v = a[t];
	printf("%d",v);
	free(a);
	return 0;
}