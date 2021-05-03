#include<stdio.h>
#include<stdlib.h>


/*
AVEC POINTEUR
void factoriel(int *n )
{
	int i=*n;
	do
	{
		*n = *n *(i-1);
		i--;
	}
	while(i!=1);
	printf("le resultat est %d\n",*n );
}


int main()
{
	int n;

	printf("donner un nombre\n");
	scanf("%d",&n);


	factoriel(&n);

	//factoriel(n);
}*/


//SANS POINTEUR
void factoriel(int n )
{
	int i=n;
	do
	{
		n = n * (i-1);
		i--;
	}
	while(i!=1);
	printf("le resultat est %d\n",n );
}


int main()
{
	int n;

	printf("donner un nombre\n");
	scanf("%d",&n);

	factoriel(n);

	//factoriel(n);
}