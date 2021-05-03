#include<stdio.h>
int main()
{
	int x;
	printf("\t entrer un nombre s'il vous plait\n");
	scanf("%d", &x);
	switch(x)
	{
		case 1: printf("lundi\n"); break;
		case 2: printf("mardi \n"); break;
		case 3: printf("mercredi \n");break;
		case 4: printf("jeudi\n"); break;
		case 5: printf("vendredi\n"); break;
		case 6 : printf("samedi\n"); break;
		case 7: printf("dimanche\n"); break;
		default :printf("le numero choisi ne correspond a aucun jour de la semaine\n");
         printf("veuillez reessayer s'il vous plait");
	}
	return 0;
}