#include<stdio.h>
#include<stdlib.h>
#include<string.h>
#include<math.h>

typedef struct etudiant
{
  int matricule;
  char nom[20], prenom[50], mention[25];
  float note;
}etudiant;

etudiant enregistrer (char *nom, char *prenom, float note)
{
  static int i=1;
  etudiant A;
  A.matricule=++i;
  strcpy(A.nom, nom);
  strcpy(A.prenom, prenom);
  A.note=note;
  if (note>=16){
    strcpy(A.mention, "tres bien");
    printf("l etudiant a la mention tres bien\n");
  }
  else if(note>=14){
    strcpy(A.mention, "bien");
    printf("l etudiant a la mention bien\n");
  }
  else if(note>=12){
    strcpy(A.mention, "assez bien");
    printf("l etudiant a la mention assez bien\n");
  }
  else if(note>=10){
    strcpy(A.mention, "passable");
    printf("l etudiant a la mention passable\n");
  }
  else{
    strcpy(A.mention, "Neant");
    printf("l etudiant n'a pas de mention\n");
  }
  return A;
}

void chercher1 (char *mention, etudiant *classe, int effectif)
{
  int i;
  int p=0;

  for(i=0; i<effectif; i++)
  {
    printf("\n");
    if(strcasecmp(classe[i].mention, mention)==0)
    {

      p++;
      printf("Matricule : %d  \nNom : %s  \nPrenom : %s  \nNote : %f \nMention : %s\n  ", classe[i].matricule, classe[i].nom, classe[i].prenom, classe[i].note, classe[i].mention);
    }
   /* else
      printf("Aucun etudiant n'a cette mention !!\n");*/
  }
  if (p==0)
  {
    printf("Aucun etudiant n'a cette mention !!\n");  }
}

void chercher2 (float note, etudiant *classe, int effectif)
{
  int i,p=0;

  for(i=0; i<effectif; i++)
  {
    if(classe[i].note==note)
    {
      p++;
      printf("Matricule : %d  \nNom : %s  \nPrenom : %s   \nNote : %f \nMention : %s\n\n", classe[i].matricule, classe[i].nom, classe[i].prenom, classe[i].note, classe[i].mention);
    }
  }
  if (p==0)
  {
    printf("AUCUN N'ETUDIANT N'A EU CETTE NOTE\n");
  }
}

void merite(etudiant *classe, int effectif)
{
  int i, j;
  etudiant tmp;
  for(i=0; i<effectif; i++)
  {
    for(j=i+1; j<effectif; j++)
    {
      if(classe[i].note<classe[j].note)
      {
        tmp=classe[i];
        classe[i]=classe[j];
        classe[j]=tmp;
      }
    }
  }
  for(i=0; i<effectif; i++)
  {
    printf("\n");
    printf("nom : %s\nprenom : %s\nmatricule : %d\nnote : %f\nmention : %s\n",classe[i].nom, classe[i].prenom, classe[i].matricule, classe[i].note, classe[i].mention );
  }
}

int main()
{
  char nom[20], prenom[50], mention[20];
  etudiant *classe;
  int effectif, i;
  float note;

  printf("L'effectif de la classe svp: ");
  scanf("%d", &effectif);

  classe=(etudiant*)malloc(sizeof(etudiant)*effectif);

  for(i=0; i<effectif; i++)
  {
    printf("\n");
    printf("\nCeci sont les coordonnees de l'etudiant %d ", i+1);
    printf("\nVotre prenom svp:  ");
    fflush(stdin);
    scanf("%s",prenom);
    printf("Votre nom svp:  ");
    scanf("%s",nom);

    do{
      printf("La note de l'apprenant svp : ");
      scanf("%f", &note);
      if (note<0 || note>20)
      {
        printf("DESOLE La NOTE DOIT ETRE COMPRIS ENTRE 0 ET 20\n");
      }
    }while(note<0 || note>20);

    classe[i]= enregistrer(nom, prenom, note);
    printf("\n");
  }

  printf("\n\n");
  printf("entrer la mention que vous chercher svp:  ");
  fflush(stdin);
  scanf("%s",mention);

  chercher1(mention, classe, effectif);
  printf("\n\n");

  printf("entrer la note dont vous aimerez voir la liste des etudiants qui l'ont obtenu svp:  ");
  scanf("%f", &note);

  printf("\n");
  chercher2(note, classe, effectif);
  printf("\n\n\n");

  printf("la liste de merite de la classe est : \n");
  merite(classe, effectif);
}
