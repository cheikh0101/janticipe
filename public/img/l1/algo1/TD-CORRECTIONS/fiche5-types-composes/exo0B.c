#include<stdio.h>
#include<stdlib.h>
#define x 5
int main()
{
	int i,j;
	int t[x];
	int b[x];
		
		for (i = 0; i <= x-1; i++)
		{
			do
			{
				printf("veuillez entrer le %deme entier positif please\t",i+1 );
				scanf("%d", &t[i]);
				if (t[i]<=0)
				{
					printf("!! ERROR!! entier positif\n");
				}
			}
			while(t[i]<=0);
		}
		j=0;
		for (i = 0; i <= x-1; i++)
		{
			if (t[i]%2==0)
			{
				b[j]=t[i];
				j=j+1;
			}
		}
		for (i = 0; i <= x-1; i++)
		{
			if (t[i]%2!=0)
			{
				b[j]=t[i];
				j=j+1;
			}
		}
		printf("!! VOILA LE TABLEAU DONT ON A DISPOSE LES NOMBRES PAIRS APRES LES NOMBRES IMPAIRS \n");
		for(j=0; j<= x-1; j++)
			{
				
				printf("%d\t",b[j] );
			}
}