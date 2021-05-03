#include<stdio.h>
#include<string.h>
#include<stdlib.h>


int main()

{
  FILE *fou;


  char prenom1[20],nom[20],prenom[20],lieu[20],cycle[20],filiere[20],ufr[20];
  int nombre,i,date,annee;


  printf("le nombre d'etudiant svp\n");
  scanf("%d",&nombre);

  for(i=0; i<nombre; i++)
  {
    printf("\n");printf("\n");

    printf("ceci sont les coordonnees du %d etudiant\n",i+1);

    printf("le nom de l'etudiant svp ...");
    scanf("%s",nom);

    printf("le prenom de l'etudiant svp....");
    scanf("%s",prenom);

    strcpy(prenom1,prenom);

    strcat(prenom,nom);
    strcat(prenom,".txt");

    fou = fopen(prenom,"w+");

    fputs("le nom de l'etudiant est...",fou);
    fputs(nom,fou);

    fputs("\n",fou);


    fputs("le prenom de l'etudiant est...",fou);
    fputs(prenom1,fou);

    fputs("\n",fou);

    printf("la date de naissance de l'etudiant svp..");
    scanf("%d",&date);
    fputs("la date de naissance  de l'etudiant est...",fou);
    fprintf(fou,"%d",date);

    fputs("\n",fou);

    printf("le lieu de naissance de l'etudiant svp...");
    scanf("%s",lieu);
    fputs("le lieu de naissance  de l'etudiant est ...",fou);
    fputs(lieu,fou);

        fputs("\n",fou);

    printf("le cycle universitaire svp..");
    scanf("%s", cycle);
    fputs("le cycle universitaire de l'etudiant est...",fou);
    fputs(cycle,fou);

    fputs("\n",fou);

    printf("l'annee d'etude svp...");
    scanf("%d",&annee);
    fputs("l'annee d'etude de l'etudiant est...",fou);
    fprintf(fou,"%d",annee);

    fputs("\n",fou);

    printf("la filiere svp..");
    scanf("%s",filiere);
    fputs("la filiere de l'etudiant est...",fou);
    fputs(filiere,fou);

    fputs("\n",fou);

    printf("l'unite de formation et de recherche svp...");
    scanf("%s",ufr);
    fputs("l'ufr de l'etudiant est...",fou);
    fputs(ufr,fou);
  }

}
