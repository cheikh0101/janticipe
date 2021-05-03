#include<stdio.h>
#include<stdlib.h>
#include<string.h>
#define n 25

int main()
{
	signed char ch1[n],ch2[n];
	int i,j;

	printf("veuillez donner une premiere chaine de caractere\n");
	scanf("%s", ch1);

	printf("veuillez taper une deuxieme chaine de caractere\n");
	scanf("%s", ch2);

	if (strlen(ch1)!=strlen(ch2))
	{
		printf("les 2 chaines ne sont pas miroirs\n");
	}
	else
	{
		for (i=0; i<strlen(ch1) ; i++)
		{
			if (ch1[i]!=ch2[strlen(ch1)-1-i])
			{
				j++;
			}
		}
		if (j!=0)
		{
			printf("les 2 chaines ne sont pas miroirs\n");
		}
		else
		{
			printf("les 2 chaines sont miroirs\n");
		}
	}
}
