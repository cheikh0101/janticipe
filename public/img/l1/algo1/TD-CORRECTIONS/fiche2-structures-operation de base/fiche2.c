#include<stdio.h>
#include<stdlib.h>
int main()
{
int x;
do
{
printf("REALISE PAR CTG\n");
system("pause");
system("cls");
printf("bienvenue de le menu de la fiche2 \n");
system("pause");
system("cls");
printf("tapez1 pour l'exercice 1\n tapez2 pour l'exercice 2\ntapez3 pour l'exercice 3\n tapez4 pour l'exercice 4\ntapez5 pour l'exercice 5\n tapez6 pour l'exercice 6\n");
scanf("%d", &x);
}
while(x<0 &&x>6);
switch(x)
{
	case 1:
	{
	float l,L,P,S,dp;
	printf("bienvenue sur l'algorithme des dimensions\n");
	printf("donner la valeur de la longueur \n");
	scanf("%f", &l);
	printf("donner la valeur de la largeur \n");
	scanf("%f", &L);
	dp = l+L;
	P = (l+L)*2;
	S = l*L;
	printf("le demi-perimetre est %4.2f \n le perimetre est %4.2f \n la surface est %4.2f \n",dp,P,S);
	}                                       

	break;
	case 2:
	{
   int x;
   float inverse;
   printf("bienvenue sr l'algorithme qui calcule l'inverse \n");
   printf("veuillez entrer un nombre non nul \n");
   scanf("%d", &x);
   inverse =( float)1/x;
   printf("l'inverse de x est %f \n",inverse);
      
	}

	break;
	case 3:
	{
	float x,z;
	int y;
	printf("bienvenue sur l'algorithme de decomposition des nombres\n");
	printf("entrez un reel quelconque \n");
	scanf("%f", &x);
	y =(int)x;
	printf("la partie entiere de %f est: %d \n", x,y);
	z = x-y;
	printf("la partie decimale de %f est: %f \n", x,z);
	}

	break;
	case 4:
	{
  int x;
  float y;
  const int a=2.5;
  printf("bienvenue sur l'algorithme qui gere le bonus et le solde global du crediit telephonique\n");
  printf("entrer du credit \n");
  scanf("%d", &x);
  y=x*a;
  printf("le montant du bonus est %f \n",y);
  x=x+y;
  printf("le solde global est %d \n", x);
	}

	break;
	case 5:

	break;
	case 6:
	{
	float r,a,b;
	do
	{
	printf("bienvenue sur l'algorithme qui realise les operations arithmetiques \n");
	printf("donne un nombre non nul \n");
	scanf("%f", &a);
	printf("donne un autre nombre non nul \n");
	scanf("%f", &b);
	}
	while(a==0 || b==0);
	r=a+b;
	printf("le resultat de l'addition est %4.2f \n", r);
	r=a-b;
	printf("le resultat de la difference est %4.2f \n", r);
	r=a*b;
	printf("le resultat de la multiplication est %4.2f \n", r);
	r=a/b;
	printf("le resultat de la division est %4.2f \n", r);	
	}

	break;

}
	return 0;
}