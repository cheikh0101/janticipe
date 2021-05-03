#include<stdio.h>
int main(void)
{
	float a,b;
	printf("donne un nombre non nul \n");
	scanf("%f", &a);
	printf("donne un autre nombre non nul \n");
	scanf("%f", &b);
	printf("le resultat de l'addition est %.2f \n", a+b);
	printf("le resultat de la difference est %.2f \n", a-b);
	printf("le resultat de la division est %.2f \n", a/b);
	printf("le resultat de la multiplication est %.2f \n", a*b);
	return 0 ;
}