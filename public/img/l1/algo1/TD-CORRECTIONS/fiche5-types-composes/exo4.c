#include <stdio.h>
#include<stdlib.h>
#include <math.h>

/*typedef struct point
{
	float x;
	float y;
}point;

typedef struct segment
{
	point a;
	point b;
	float longueur;
}segment;*/

	typedef struct point
	{
		float x,y;
	}point;

	typedef struct segment
	{
		point a,b;
		float longueur;
	}segment;

int main()
{
	point m;
	segment s;
	float A,B;


	printf("le point A est la premiere extremité du segment\n");
	printf("veuillez entrer l'abscisse de ce point :");
	scanf("%f",&s.a.x);
	printf("veuillez entrer l'ordonnee de ce point :");
	scanf("%f",&s.a.y);
	printf("\n\n");
	printf("le point B est la deuxieme extremite du segment\n");
	printf("veuillez entrer l'abscisse de ce point :");
	scanf("%f",&s.b.x);
	printf("veuillez entrer l'ordonnee de ce point :");
	scanf("%f",&s.b.y);
	printf("\n");

	A = (s.a.y - s.b.y) / (s.a.x - s.b.x);
	B = s.a.y -A * s.a.x;

	printf("soit un point M du plan\n");
	printf("\n\n");
	printf("veuillez entrer l'abscisse du point \n");
	scanf("%f",&m.x);
	printf("veuillez entrer l'ordonnée de ce point\n");
	scanf("%f",&m.y);

	if (m.y == A*m.x + B)
	{
		printf("le point M appartient a la droite\n");
	}
	else
	{
		printf("le point M n'appartient pas a la droite\n");
	}

	return 0;
}
