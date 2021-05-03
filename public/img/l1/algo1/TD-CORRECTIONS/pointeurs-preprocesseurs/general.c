#include<stdio.h>
#include<stdlib.h>
#include<string.h>

int main()

{

int menu;

printf("veuillez choisir svp\n");
scanf("%d",&menu);
switch (menu)
  {
   case 0:
   {
     int binaire,cpt=0,accumulateur=0,binaire1;

     printf("donner une valeur binaire\n");
     scanf("%d",&binaire);

     binaire1 = binaire;

     do
     {
       cpt++;

       accumulateur = binaire%10*pow(2,cpt-1) + accumulateur ;

       binaire = binaire / 10;

     } while(binaire);

     printf("la CONVERSION de %d donne %d \n",binaire1,binaire );

   }
  }

}
