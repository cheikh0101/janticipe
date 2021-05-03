#include <stdio.h>
#include<stdlib.h>

int main()

{
	FILE *fichier;
	fichier = fopen("stat_socio.txt","w");


	if(fichier == NULL)
	{
		printf("probleme var\n");
		fclose(fichier);
	}
	else
	{
		int age,i;
		char prenom[25],nom[25],religion[25],adresse[25];

		fputs("\n",fichier);fputs("\n",fichier);

			printf("votre prenom svp\n");
			scanf("%s", prenom);
			fputs("prenom :",fichier);
			fputs(prenom,fichier);

			fputs("\n",fichier);

			printf("votre nom svp\n");
			scanf("%s", nom);
			fputs("nom :",fichier);
			fputs(nom,fichier);

			fputs("\n",fichier);

			printf("votre age svp\n");
			scanf("%d",&age);
			fputs("age :",fichier);
			fputc(age,fichier);

			fputs("\n",fichier);

			printf("quelle est votre religion\n");
			scanf("%s", religion);
			fputs("religion :",fichier);
			fputs(religion,fichier);

			fputs("\n",fichier);

			printf("votre adresse svp\n");
			scanf("%s", adresse);
			fputs("adresse :",fichier);
			fputs(adresse,fichier);

			fputs("\n",fichier);
	
	}

}
