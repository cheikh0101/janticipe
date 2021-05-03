#include <stdio.h>
int main(void)
{
   int x;
   float inverse;
   printf("veuillez entrer un nombre entier non nul \n");
   scanf("%d", &x);
   inverse =( float)1/x;
   printf("l'inverse de x est %f \n",inverse);
      return 0;
}