#include<stdio.h>
#include<stdlib.h>
#include<string.h>
#define x 100

int main()
{
	signed char ch[x],tmp[x];
	int c,i=0;

	printf("veuillez entrer une chaine de caractere s'il vous plait\n");
	scanf("%s", ch);

	strcat(tmp, ch);

	while(tmp[i]!= '\0')
	{
		if (tmp[i]>='a' && tmp[i]<= 'z')
		{
			tmp[i]=tmp[i]-32;
		}
		else if (tmp[i]>='A' && tmp[i]<= 'Z')
		{
			tmp[i]=tmp[i]+32;
		}

		i++;
	}

	printf(" '%s' tape contenant %d lettre(s) a ete converti ainsi:  %s \n",ch,i,tmp);
}
