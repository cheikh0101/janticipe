//METHODE DE PAPA DIOP

//CONVERSION D'UNE VALEUR BINAIRE DANS LA BASE DECIMALE

#include <stdio.h>
#include<math.h>

int main()
{
  int binaire,accumulateur=0,binaire1;
  double cpt=0;

  printf("donner une valeur binaire\n");
  scanf("%d",&binaire);

  binaire1 = binaire;

  do
  {
    cpt++;

    accumulateur = binaire%10*(pow(2,cpt-1)) + accumulateur ;

    binaire = binaire / 10;

  } while(binaire);

  printf("la CONVERSION de %d donne %d \n",binaire1,accumulateur );

}


//MA METHODE
/*#include<stdio.h>
#include<stdlib.h>

int main()
{
  int binaire,tmp,cpt=1;

  printf("donner un nombre binaire\n");
  scanf("%d",&binaire);

  tmp = binaire;

  do
  {
    binaire = binaire % 10;
    if ((binaire%10) == 2 || (binaire%10) == 3 || (binaire%10) == 4 || (binaire%10) == 5 || (binaire%10) == 6 || (binaire%10) == 7 || (binaire%10) == 8 || (binaire%10) == 9)
    {
      printf("donner un nombre binaire\n");
      scanf("%d",&binaire);

      tmp = binaire;
    }
  }while((binaire%10) == 2 || (binaire%10) == 3 || (binaire%10) == 4 || (binaire%10) == 5 || (binaire%10) == 6 || (binaire%10) == 7 || (binaire%10) == 8 || (binaire%10) == 9);

  binaire = tmp;

  do
  {
    binaire = binaire / 10;
    cpt++;
  } while( (binaire/10) != 0);


  int resultat = 0;

  do
  {
    resultat = resultat + (pow(2,(cpt-1)) * tmp % 10);
  }while(tmp != 0);

  printf("la conversion donne : %d\n",resultat );

}*/
