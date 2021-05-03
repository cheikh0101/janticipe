#include<stdio.h>
#include<stdlib.h>

int main()

{
  int *tableau,i,taille,**matrice,j;

  printf("taille du tableau ");
  scanf("%d",&taille);

  tableau =  malloc (taille*sizeof(int));

  for(i=0; i<taille; i++)
  {
    printf("l'element %d\n",i+1 );
    scanf("%d", &tableau[i]);
  }
/////////////////////////////////////////
  matrice=malloc (sizeof(int*) * taille);

  for(i=0; i < taille; i++)
  {
    matrice[i] = malloc (sizeof(int) * (taille-i));
    for(j=0; j<(taille-i) ;j++)
    {
      matrice[i][j] = tableau[j+i];
    }
  }

  for(i=0; i< taille; i++)
  {
    for(j=0; j<(taille-i) ;j++) 
    {
      printf(" %d ",matrice[i][j] );
    }
    printf("\n");
  }


  free(matrice);
  free(tableau);



}
