/*
An exmaple of malloc(memory allocate) function.
 */



#include <stdio.h>
#include <stdlib.h>   //Contain <malloc.h>

int main(void)
{
	int i = 5; //allocating 4 byties through static allocation
	int * p = (int *)malloc(4);
	/*
		1.if you wanna use function of malloc you must add the head file of <malloc.h>
		2.malloc function has only one formual parameter and the type of the formual function is integer.
		3.malloc(4),"4" means that asking the system to allocate 4 bytes for this program.
		4.the funtion of malloc can just return the first byte's address.
		5.int * p = (int *)malloc(4) this expression allocates 8 bytes ram space,p occupies 4 bytes and the ram
		  what p points is to occupy 4 bytes.

		6.the ram space of p is static allocation,but the ram of what p points is dynamic allocation.


	 */
	*p = 5; //*p represesnts a integer variable but the allocation of ram is different from "int i = 5"; 




	free(p); //free(p) means releasing the ram speace what p pointed.
		     //the ram of the p is static that can not release the ram by manual operation
		     //the p just can be released by the system when it operates over.
	printf("Hill hydra!\n");





	return 0;
}