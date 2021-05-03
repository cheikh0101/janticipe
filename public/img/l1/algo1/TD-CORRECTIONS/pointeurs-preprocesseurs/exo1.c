//CONVERSION EN BINAIRE VERS UNE BASE NATURELLE

#include <stdio.h>
#include<string.h>
#include<stdlib.h>

int main ()

{
  int x,i=0,cmp,var,*tab;

  printf("donner un nombre entier\n");
  scanf("%d",&x );
  var = x;
  while (x!=0)
  {
    x=x/2;
    i++;
  }

  x=var;

  tab=(int*)malloc(sizeof(int)*i);

  for (cmp=i; cmp>=0; cmp--)
  {
    tab[cmp-1]=x%2;
    x=x/2;
  }

  for ( cmp = 0;  cmp< i; cmp++)
  {
    printf("%d",tab[cmp] );
  }

}

/*AUTRE METHODE

  #include<stdio.h>
#include<stdlib.h>

int main()
{
  int tmp,decimale,i,cpt=0,*tab;

  printf("une valeur decimale svp\n");
  scanf("%d",&decimale);

  tmp = decimale;

  do
  {
    decimale = decimale/2;
    cpt++;
  }
  while(decimale != 0);

  decimale = tmp;

  tab = (int*) malloc (sizeof(int) * cpt);

  for(i=0; i<cpt; i++)
  {
    tab[i] = decimale%2;

    decimale = decimale/2;
  }

  for(i=0; i<cpt; i++)
  {
  printf(" %d ",tab[cpt-1-i]);
  }

}

*/

/*#include<stdio.h>
#include<stdlib.h>

int main ()

{
  int entier,cpt=0,tmp,*binaire;

  printf("veuillez donner un entier svp\n");
  scanf("%d", &entier);

  tmp = entier;

  printf("la conversion de %d donne :",tmp );

  do
  {
    //entier = entier/2;

    entier/=2;

    cpt++;

  }while(entier != 0);

  entier = tmp;

  binaire = (int*) malloc (sizeof(int)*cpt);

  do
  {
    binaire[cpt-1] = entier%2;

    entier = entier/2;

    cpt--;
  }while(entier);

  for(cpt=0; cpt<tmp; cpt++)
  {
    printf(" %d ",binaire[cpt]);
  }

}*/


/*

#include<stdio.h>
#include<stdlib.h>

int main()
{

  int nbre,i=0,tmp,cpt=0,*tableau;

  printf("un nombre appartenant a la base naturelle svp : ");
  scanf("%d", &nbre);

  tmp = nbre;

  do
  {
    nbre = nbre/2;
    cpt++;
  }
  while(nbre != 0);

  nbre = tmp;

  tableau = malloc(sizeof(int) * cpt);

  do
  {
    tableau[i] = nbre % 2;
    nbre = nbre/2;
    i++;
  }
  while(nbre != 0);

  for(i=0; i<cpt; i++)
  {
    printf("%d ",tableau[cpt-i-1] );
  }



}*/
