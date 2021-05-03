#include <stdio.h>
#include<stdlib.h>
#include<math.h>

float somme(float x, float y);
float somme(float x, float y)
{
  return x+y;
}

float puissance(float x, float y);
float puissance(float x, float y)
{
  return pow(x,y);
}

void permutation(float *x, float *y);
void permutation(float *x, float *y)
{
  float tmp;
  tmp = *x;
  *x = *y;
  *y = tmp;

}

void affichage(float x, float y)
{
  printf("on a X=%.2f\n",x );

  printf("on a Y=%.2f\n",y );
}

int main()
{
  float x,y;

  printf("veuillez donner 2 nombres svp\n");
  scanf("%f",&x);
  scanf("%f",&y);

  printf("la somme des 2 nombres(%.2f + %.2f) est %.2f\n",x,y,somme(x,y));

  printf("le calcul de la puissance donne %.2f\n", puissance(x,y));

  printf("avant la permutation :\n");
  affichage(x,y);

  printf("\n");

  permutation(&x,&y);

  printf("apres la permutation nous avons :\n");
  affichage(x,y);

}
