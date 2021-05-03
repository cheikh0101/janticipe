#include<stdio.h>
#define taille 3

//editons la structure DATE
typedef struct date
{
	int jj;
	int aa;
	int mm;
}date;

//enumerons les fruits
enum fruit {orange,mangue,banane,pomme,ananas,mandarine,papaye,pamplemousse};


//editons la structure produit
typedef struct produit
{
	date d;
	float poids;
	enum fruit id;
}produit;


int main()
{

	produit tab[taille];
	int i,n,som=0,cpt=0;

	for(i=0; i<taille; i++)
	{

		printf("entrer le type du produit %d \n",i+1);
		printf("\n");

		printf("c'est quel produit svp : ");
		scanf("%d",&tab[i].id);


		printf("entrer la date de recolte svp c'ad :\n");
		printf("\n");

		printf("entrer le jour : ");
		scanf("%d", &tab[i].d.jj);

		printf("entrer le mois : ");
		scanf("%d", &tab[i].d.mm);

		printf("entrer l'annee : ");
		scanf("%d", &tab[i].d.aa);

		printf("entrer le poids du produit \n");
		scanf("%f", &tab[i].poids);

		som = som +  tab[i].poids;
	}

	printf("le poids moyen des recoltes est %d\n",som/taille );
	n = som/taille;
	do
	{
		n = n/10;
		cpt++;
	}
 	while(n != 0);
	printf("le nombre de chiffre que comporte cet indicateur est %d\n",cpt );

}
