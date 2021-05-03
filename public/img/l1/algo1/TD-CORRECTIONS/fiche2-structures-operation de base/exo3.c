#include<stdio.h>
int main()
{
	float x,z;
	int y;
	printf("bienvenue sur l'algorithme de decomposition des nombres\n");
	printf("entrez un reel quelconque \n");
	scanf("%f", &x);
	y =(int)x;
	printf("la partie entiere de %f est: %d \n", x,y);
	z = x-y;
	printf("la partie decimale de %f est: %f \n", x,z);
	return 0;
}