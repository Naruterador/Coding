#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <errno.h>
#include <math.h>
extern int errno;

int main(void)
{
	float k = -5;
	float num = 1000;
	float result;

	errno = 0;
	result = sqrt(k);

	if (errno == 0)
	  printf("%f ", result);
	else if (errno == EDOM)
	  fprintf(stderr, "%s\n", strerror(errno));

	errno = 0;
	result = exp(num);
	if (errno == 0)
	  printf("%f ", result);
	else if (errno == ERANGE)
	  fprintf(stderr, "%s\n", strerror(errno));


	return 0;
}