#include <stdio.h>
int main ()

{
	float l,L,P,S,dp;
	printf("donner la valeur de la longueur \n");
	scanf("%f", &l);
	printf("donner la valeur de la largeur \n");
	scanf("%f", &L);
	dp = l+L;
	P = (l+L)*2;
	S = l*L;
	printf("le demi-perimetre est %f \n le perimetre est %f \n la surface est %f \n",dp,P,S);
	
	
	
    return 0;
}                                       