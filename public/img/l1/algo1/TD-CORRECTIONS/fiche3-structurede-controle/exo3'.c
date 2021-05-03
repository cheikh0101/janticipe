#include <stdio.h>
int main()
{
int x;
printf(" veuillez donner un nombre \n");
scanf("%d", &x);
if (x==1)
{
	printf("lundi\n");
}
if (x==2)
{
printf("mardi \n");	
}
if (x==3)
{
	printf("mercredi \n");
}
if (x==4)
{
	printf("jeudi\n");
}
if (x==5)
{
	printf("vendredi\n");
}
if (x==6)
{
	printf("samedi\n");
}
if (x==7)
{
	printf("dimanche \n");
}
if (x>7 && x<1)
{
	printf("veuillez choisir un autre nombre");
}
	return 0;
}
