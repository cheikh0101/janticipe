#include<stdio.h>
#include<string.h>
#include<stdlib.h>

void petite(int nbre, int *tab)
{
  int i,j,tmp;
  for(i=0; i<nbre; i++)
  {
    for(j=i+1; j<nbre; j++)
    {
      if(tab[i] > tab[j])
      {
        tmp = tab[j];
        tab[j] = tab[i];
        tab[i] = tmp;
      }
    }
  }
  for(i=0; i<nbre; i++)
  {
    if(i==0)
    {
      printf("le plus petite valeur est %d \n",tab[i]);
    }
  }
}


void petite1(int nbre, int *tab)
{
  int i,j,tmp;
  for(i=0; i<nbre; i++)
  {
    for(j=i+1; j<nbre; j++)
    {
      if(tab[i] > tab[j])
      {
        tmp = tab[j];
        tab[j] = tab[i];
        tab[i] = tmp;
      }
    }
  }
  for(i=0; i<nbre; i++)
  {
    if(i==1)
    {
      printf("la deuxieme plus petite valeur est %d \n",tab[i]);
    }
  }
}

void rangement(int nbre,int *tab)
{
  int i,j,tmp;

  for(i=0; i<nbre; i++)
  {
    for(j=i+1; j<nbre; j++)
    {
      if(tab[i] < tab[j])
      {
        tmp = tab[j];
        tab[j] = tab[i];
        tab[i] = tmp;
      }
    }
  }
  for(i=0; i<nbre; i++)
  {
    printf("%d ",tab[i]);
  }
}

void recursif(int nbre, int *tab)
{
  static int i=0;
  if(i==nbre)
  {
    exit(1);
  }

  printf("%d ",tab[i]);

  i++;

  recursif(nbre,tab);

}

void argument(int nbre,int *tab)
{
  printf("\n");
  int i,position;
  printf("donner la position svp :");
  scanf("%d",&position);

  for(i=position; i<nbre; i++)
  {
    printf("%d ",tab[i]);
  }
}

int main()
{

  int i,nbre,*tab;
  float element;

  printf("le nombre d'element du tableau svp :");
  scanf("%d",&nbre);

  tab = malloc(sizeof(int) * nbre);

  for(i=0; i<nbre; i++)
  {
    do
    {
      printf("le %d element svp :",i+1);
      //scanf("%d",&tab[i]);
      scanf("%f",&element);
      tab[i] = (int)element;
    }
    while(element != (int)element);
  }

  petite(nbre,tab);

  petite1(nbre,tab);

  rangement(nbre,tab);

  argument(nbre,tab);

  printf("\n" );

  printf("l'affichage recursif des elements du tableau\n");

  recursif(nbre,tab);

}
