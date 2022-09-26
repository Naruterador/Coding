/*
Inputing a string from keyboard for example "ab12cd34efgh5abc6789",converting the successive number into a array for instance num[0] ={12} num[1]={34}
*/

#include <stdio.h>
#include <string.h>
#include <stdlib.h>

int main(void)
{
	char * str = "ab12345cd34efgh56ab123c6789";
	char * strr = (char *)(malloc(sizeof(char) * 10));
	int * arr = (int *)(malloc(sizeof(int) * 10));

	int len = 0;
	len = strlen(str);
	int i,j = 0,k = 1,n = 0,l,s = 0,t = 0;

	for(i = 0;i < len;i++)
	{
		if(str[i] >= 48 && str[i] <= 57)
		{
			//find out the successive numbers;
			//start
			while(str[i+1] == str[i]+1)
			{
				strr[j] = str[i];
				strr[j+1] = str[i+1];
				j++;
				i++;
				n++;
				continue;
			}
			//end

			if(n >= 1)
			{
				for(l = 0;l < n + 1;l++)
				{
					s = 10 * s + (strr[l] - '0');
				}

				arr[t] = s;
				t++;

				n = 0;
				j = 0;
				s = 0;	
			}
			 memset(strr, 0,10);       //earsing all elements in array;
		}
	}


	for(i = 0;i < t;i++)
	{
		printf("%d\n",arr[i]);
	}
	return 0;
}