#include<stdio.h>
#include<string.h>
#include<stdlib.h>


//Definissons une structure ETUDIANT
typedef struct ETUDIANT
{
    char nom[20],prenom[20],mention[20];
    int age;
    float moyenne;
}ETUDIANT;



int main()
{
   
   ETUDIANT *tab=NULL;
   int nbre,i,som=0;
   float moy,moymax = 0;

   printf("veuillez donner le nombre d'apprenants svp\n");
   scanf("%d", &nbre);

   tab =malloc(sizeof(ETUDIANT) * nbre);
printf("\n");
if(tab == NULL)
{
    exit(1);
}
else
{
       for(i=0; i<nbre; i++)
       {
    printf("\n");
            printf("les coordonnees de l'etudiant %d\n",i+1 );

            printf("le nom de l'apprenant svp\n");
            scanf("%s", &tab[i].nom);
            //fgets(tab[i].nom, 20, stdin);

            printf("le prenom de l'apprenant svp\n");
            scanf("%s", &tab[i].prenom);

            printf("la moyenne de l'etudiant svp\n");
            scanf("%f", &tab[i].moyenne);

            if(tab[i].moyenne <=16)
            {
                strcpy(tab[i].mention , "tres bien");
            }
            else
                if (tab[i].moyenne <=14)
                {
                    strcpy(tab[i].mention , "bien");
                }
            else
                if (tab[i].moyenne <=12)
                {
                    strcpy(tab[i].mention , "assez-bien");
                }
            else
                if (tab[i].moyenne <=10)
                {
                    strcpy(tab[i].mention , "passable");
                }
            else
            {
                    strcpy(tab[i].mention , "excellent");
            }

            printf("l'age de l'apprenant\n");
            scanf("%d", &tab[i].age);

            som = som + tab[i].age;
       }
       moy = som/nbre;
       printf("l'age moyenne de la classe est %f \n",moy);

    printf("\n");

       
       //DETERMINONS LA PLUS FORTE MOYENNE
        for(i=0; i<nbre; i++)
        {
            if (tab[i].moyenne > moymax)
            {
                moymax = tab[i].moyenne;
            }
        }   
        printf("la plus forte moyenne est %f \n",moymax);
        


    printf("\n");

        printf("la liste des etudiants dont le nom de famille est diop\n");
        //nom de famille
        for(i=0; i<nbre; i++)
        {
            if( (strcasecmp(tab[i].nom, "diop") ) == 0)
            {
                printf("le %d est %s\n",i+1, tab[i].prenom);
            }
            else
            {
                printf("\n");
                printf("le %d apprenant n'a pas pour nom de famille diop\n",i+1 );
            }
        }
    }
}
