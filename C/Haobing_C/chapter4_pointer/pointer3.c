/*
An example of pointer.
 */

#include <stdio.h>
int main(void)
{
	int i = 5;
	int * p;
	int * q;

	p = &i;
	/*
	*q = p;
	This is a wrong operation of assignment,because the data type of *q
	is integer but the data type of p is integer * .
	*/
	/*
	*q = *p;
	 */
	/*
	p = q; 
	 The space of q is belong to this program,so the program can read and
	 write the content of q.
	 but if the value of q has garbage value then this program can not 
	 read and write the content of *q,because of the contorling authority of ram unit of what *q 
	 represents dose not assign into this program.
	 */


	printf("%d\n",*q);
	return 0;
}