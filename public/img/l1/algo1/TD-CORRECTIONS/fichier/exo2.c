	#include<stdio.h>
	#include<stdlib.h>

	int main()
	{
		int x = 500,m,i;
		FILE *fic = NULL;
		fic = fopen("impair.txt","w");

		if (fic == NULL)
		{
			printf("il y a une erreur\n");
			fclose(fic);
		}
		else
		{
			printf("contenu du fichier intitule <impair.txt>\n");
			for(i=0; i<500; i++)
			{
				if((i%2) != 0)
				{
					fprintf(fic,"  %d ",i);
					printf(" %d  ",i);//affichage des nbres impairs au niveau de la console
				}
			}
			printf("\n");
			printf("\n");
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			printf("affichage des fichiers intitule <premier.txt>\n");
				FILE *premier;
				premier = fopen("premier.txt","w");//creation du fichier intitule<premier.txt


				//while(fscanf(fic,"  %d ",i) != EOF)
				while(fputc("%d",fic) != EOF)

				{

						/*while(x>=2)
						{
							for(i=1; i<=x; i++)
							{
								if(x%i==0)//si x est pair
								{
									m++;
								}
							}
							if(m==2)
							{
								printf("  %d ",x);//affichage des nombres premiers a la console
								fprintf(premier, "  %d  ", x );
							}
							m=0;
							x--;
						}*/

						while(i>=1)
						{
							for(int j=1; j<=i; j++)
							{
								if(i%j==0)//si x est pair
								{
									m++;
								}
							}
							if(m==2)
							{
								printf("  %d ",i);//affichage des nombres premiers a la console
								fprintf(premier, "  %d  ", i );
							}
							m=0;
							i--;
						}


	 			}
		}
	}
