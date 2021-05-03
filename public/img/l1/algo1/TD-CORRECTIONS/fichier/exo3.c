#include<stdio.h>
#include<stdlib.h>
#include<string.h>
#include<math.h>

int main()
{
	FILE *fichier;
	//fichier = fopen("TabledeMultiplicationde de .txt","a+");

	if(fichier == NULL)
	{
		printf("y a un probleme\n");
		fclose(fichier);
	}
	else
	{
		int i;
		char mot2[29];
		char mot[] = "TabledeMultiplication ";
		char mot1[] = ".txt";

		printf("donner le nombre dont il est question  :");
		scanf("%s",mot2);

		/*
		char nombre[10] = "12";
		int val = atoi(nombre);
		*/

		int  y = atoi(mot2);  // add to int

		strcat(mot,strcat(mot2,mot1)); //TOUT CECI PEUT ETRE FAIT AVEC LA FONCTION SPRINTF

		/*
			EXEMPLE TRES SIMPLE

			#include<stdio.h>
			#include<stdlib.h>
			#include<string.h>
			#include<math.h>

			int main()
			{
				FILE *fichiers;

					int nombre;
					
					char mot[100];
					
					printf("donner le nombre dont il est question  :");
					
					scanf("%d",&nombre);

					// LE PLUS IMPORTANT ==> sprintf(mot,"table de multiplication de %d .txt", nombre);

					fichiers = fopen(mot,"a+");


					fprintf(fichiers,"lolou");

			

		}

		*/
		fichier = fopen(mot,"a+");


				fputs("\n",fichier);

				for(i=0; i<=y; i++)
				{
					fprintf(fichier,"%d * %d  =  %d\n",y,i,y*i);
				}


		/*
			---------COPIER UN NOMBRE DANS UNE CHAINE----------
		sprintf(mot2, "valeur de ... = %f" , M_PI);
		puts(mot2);


			------------COPIER UN NOBRE DANS UNE CHAINE---------
			  int day, year;
		   char weekday[20], month[20], dtm[100];

		   strcpy( dtm, "Saturday March 25 1989" );
		   sscanf( dtm, "%s %s %d  %d", weekday, month, &day, &year );

		   printf("%s %d, %d = %s\n", month, day, year, weekday );

	 */


	}

}
