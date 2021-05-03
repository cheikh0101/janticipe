//triangle de PASCAL
#include<stdio.h>
#include<stdlib.h>
int main ()

{
  int n,**triangle,i,j;


  printf("veuillez donner le nombre de lignes de votre triangle svp\n");
  scanf("%d",&n);

  triangle =  malloc (sizeof(int*) * (n+1));
  /*si l'utilisateur tape 5 lignes il aura 6 lignes
  comme resultat car le decompte debute a partir de 0

0  1
1  1 1
2  1 2 1
3  1 3 3 1
4  1 4 6 4 1

c'est pourquoi on a (n+1)
  */

  /*
  COMME ON A UN TABLEAU A PLUSIEURS DIMENSIONS PLUS PRECISEMMENT UNE
  MATRICE APRES AVOIR ALLOUER LE NOMBRE DE lignes
  ON ALLOUE POUR CHAQUE LIGNE LE NOMBRE DE CASES APRES TOUT C'EST
  UN TABLEAU
  */
  /*for(i=0; i<=n; i++)
  {
    triangle[i] = malloc ((i+1) * sizeof(int));
  }*/


  for(i=0; i<= n; i++)
  {
    triangle[i] = malloc ((i+1) * sizeof(int));
    for(j=0; j<=i; j++)
    {
      if (j==0 || i==j)
      {
        triangle[i][j]=1;
      }
      else
      {
        triangle[i][j]= triangle[i-1][j-1] + triangle[i-1][j];
      }
    }
  }

  for(i=0; i<=n; i++)
  {
    for(j=0; j<=i ; j++)
    {
      printf(" %d ",triangle[i][j]);
    }
    printf("\n");
  }


  free(triangle);
}
