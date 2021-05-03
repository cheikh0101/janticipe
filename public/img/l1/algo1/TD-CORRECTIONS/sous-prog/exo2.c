/*#include<stdio.h>
#include<stdlib.h>

 float somme (float *T, int n)
{
  float som=0;
  int i=0;
  for(; i<n; i++){
    som += T[i];
  }
    return som;
}

float  petit(float *T,int n)
{
    float min=T[0];
    int i;
    for(i=1; i<n; i++){
    if (T[i] < min) min=T[i];
  }
  return min;
}

float  grand(float *T,int n)
{
    float max=T[0];
    int i;
    for(i=1; i<n; i++){
    if (T[i] > max) max=T[i];
  }
  return max;
}

void croissant(float *t ,int taille)
{
  int i, j;
  float tmp;

  for(i=0;i<taille; i++)
  {
    for(j=i+1; j<taille ;j++)
    {
      if (t[i] > t[j])
      {
        tmp=t[i];
        t[i]=t[j];
        t[j]=tmp;
      }
    }
  }
  for(j=0; j<taille;j++)
  {
    printf("%.2f\t",t[j]);
  }
}

void affichage( float *t ,int taille,int posi)
{
  while(posi <taille)
  {
    printf("%.2f\t",t[posi]);
    posi++;
  }
}

void recursive(float *t , int taille)
{
  static int i=0;
  printf("%.2f\t", t[i]);
  i++;
  if (i<taille)  recursive(t, taille);
}


int main()
{
  float *t;
  int taille ,i;

  do
  {
  printf("La taille du tableau svp... ");
  scanf("%d",&taille);
  }
  while(taille<=0);

  t= (float*)malloc(sizeof(float)*taille);

  for(i=0 ; i<taille; i++)
  {
    printf(" Saisir l'element numero %d : ",i+1);
    scanf("%f",&t[i]);
  }

  printf("La somme des elements du tableau : %.2f\n\n", somme(t,taille));

  printf("Le plus petit element du tableau est %.2f\n\n",petit(t,taille));

  printf("L plus grand element du tableau est %.2f\n\n",grand(t,taille));

  printf("Rangement par ordre croissant\n\n");
  croissant(t ,taille);

  printf("\n Affichage a partir de la position 2\n\n");
  affichage(t,taille, 2);

  printf("\n Affichage recursive \n\n");
  recursive(t,taille);
}
*/

//MA METHODE
#include<stdio.h>
#include<stdlib.h>
#include<string.h>
#include<math.h>

void somme(float *tableau,float element)
{
  int i;
  float som=0;
  for(i=0; i<element; i++)
  {
    som = som + tableau[i];
  }
  printf("la somme des elements du tableau est %.2f\n",som );
}

void petite(float *tableau,float element)
{
  float petite=tableau[0];
  int i;

  for(i=1; i<element; i++)
  {
    if(petite > tableau[i])
    {
      petite = tableau[i];
    }
  }
  printf("la plus petite valeur du tableau est %.2f\n",petite );
}

void grande(float *tableau,float element)
{
  float petite=tableau[0];
  int i;

  for(i=1; i<element; i++)
  {
    if(petite < tableau[i])
    {
      petite = tableau[i];
    }
  }
  printf("la plus grande valeur du tableau est %.2f\n",petite );
}


void rangement(float *tableau,float element)
{
  int i,j;
  float tmp;

    for(i=0; i<element; i++)
    {

      for(j=i+1; j<element; j++)
      {

        if(tableau[i] > tableau[j])
        {
          tmp = tableau[j];
          tableau[j] = tableau[i];
          tableau[i] = tmp;

        }
      }
    }


  printf("voici le rangement des elements du tableau par ordre croissant\n");

  for(i=0; i<element; i++)
  {
    printf(" %.2f ",tableau[i]);
  }
  printf("\n");
}

void affichage(float *tableau,float element)
{
  int position,i;
  do
  {
    printf("la position d'argument svp...");
    scanf("%d",&position);
  }
  while(position <= 0 || position >= element);
  for(i=position; i<element; i++)
  {
    printf("%f ",tableau[i]);
  }
}

void recursive(float *tableau,float element)
{
  static int i=0;
  printf("\n");
  printf("l'affichage recursif des elements du tableau\n");

  printf(" %f ",tableau[i] );

  i++;

  if(i<element)
  {
    recursive(tableau,element);
  }
}


int main()
{

  int element,i;
  float *tableau;

  do
  {
    printf("le nombre d'element du tableau svp :");
    scanf("%d",&element);
  }
  while(element <=0);

  tableau = malloc(sizeof(float) * element);

  for(i=0; i<element; i++)
  {
    printf("le %d element s'il vous plait :",i+1);
    scanf("%f",&tableau[i]);
  }

  somme(tableau,element);

  petite(tableau,element);

  grande(tableau,element);

  rangement(tableau,element);

  affichage(tableau,element);

  recursive(tableau,element);

}
