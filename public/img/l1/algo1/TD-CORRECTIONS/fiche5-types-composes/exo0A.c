#include<stdio.h>
#include<stdlib.h>
#define x 5
int main()
{
	float tableau[x];
	float tmp;
	int i;
	
	for (i = 0; i <= x-1 ; i++)
	{
		printf("veuillez entrer le %d %clement s'il vous plait \t", i+1,130);
		scanf("%f", &tableau[i]);
	}	
	for ( i = 0; i <=x-1; i++)
	{
		tmp=tableau[i];
		tableau[i]=tableau[x-1-i];
		tableau[x-1-i]=tmp;
	}
	printf("le tableau a l'envers est:\n");
	for (i = 0; i <= x-1; i++)
	{
		printf("%.1f\t\t", tableau[x-1-i] );
	}
	return 0;
}