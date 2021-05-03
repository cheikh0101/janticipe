#include<stdio.h>
int main()
{
int nombre1,nombre2,tmp;
	printf("bienvenue dans l'algorithme qui permute deux nombres\n");
	nombre1=2018;
	nombre2=2019;
	tmp=nombre1;
	nombre1=nombre2;
	nombre2=tmp;
	printf("le nombre1 est:%d\nle nombre2 est:%d\n", nombre1,nombre2 );
	return 0 ;
}