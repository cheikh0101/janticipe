#include<stdio.h>
int main(void)
{
	float r,a,b;
	do
	{
	printf("donne un nombre non nul \n");
	scanf("%f", &a);
	printf("donne un autre nombre non nul \n");
	scanf("%f", &b);
	}
	while(a==0 || b==0);
	r=a+b;
	printf("le resultat de l'addition est %f \n", r);
	r=a-b;
	printf("le resultat de la difference est %f \n", r);
	r=a*b;
	printf("le resultat de la multiplication est %f \n", r);
	r=a/b;
	printf("le resultat de la division est %f \n", r);	
	return 0 ;
}