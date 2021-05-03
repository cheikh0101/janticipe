#include <stdio.h>
int main ()
{
  int x;
  float y;
  const int a=2.5;
  printf("entrer du credit \n");
  scanf("%d", &x);
  y=x*a;
  printf("le montant du bonus est %f \n",y);
  x=x+y;
  printf("le solde global est %d \n", x);
  





	return 0 ;
}