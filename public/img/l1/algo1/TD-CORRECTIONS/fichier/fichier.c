#include<stdio.h>
#include<stdlib.h>
#include<string.h>

int main()

{
	FILE *fichier; // on vient de creer un fichier
	fichier = fopen("fou.txt","r+");
	int x,y;
	if(fichier!= NULL)
	{
		printf("entrer un nombre : ");
		scanf("%d",&x);
		printf("entrer un autre nombre : ");
		scanf("%d",&y);
		fprintf(fichier,"%d+%d=%d",x,y,x+y);
	}
	else
	{
		printf("erreur a l'ouverture du fichier \n");
		fclose(fichier);
	}
}
