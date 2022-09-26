/*
The preparing learn of pointer;
 */

#include <stdio.h>

int main(void)
{
	int * p; 
	//p is the name of variable ,int * expresses the variable p store
	//variable address about integer.
	int i = 3;
	p = &i; //This is the correct operation of assigning.
	        //p saves the ram address of i,so p point the i
	        //but p is not i and i is not p,says precisely:
	        //it will have no effect about value of the i when you 
	        //change the value of p and it will have no effect of value
	        //of p when you change the value of i,either.
	
	/*
	p = i;
	it's incorrect because the type of vaiable is different
	the p is a address,but i is a integer.
	*/
    /*
    p = 55
    The same mistake as the previous operation.
     */ 
	return 0;
}