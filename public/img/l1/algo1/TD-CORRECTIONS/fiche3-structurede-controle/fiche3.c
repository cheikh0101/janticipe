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
printf("regroupement des differents exercices de la fiche3:structures de controle>>SELECTIVES \n");
system("pause");
system("cls");
printf("tapez1 pour visionner l'exercice 1\n tapez2 pour visionner l'exercice 2\ntapez3 pour visionner l'exercice 3\n tapez4 pour visionner l'exercice 4\n");
scanf("%d", &x);
}
while(x<0 &&x>4);
switch(x)
{
case 1:
	{
	int credit;
	printf("bienvenue dans l'algorithme de DECISION\n");
	printf("entrez le nombre de credits de l'etudiant \n");
	scanf("%d", &credit);
	if(credit== 60)
	{
		printf("passage definitif \n");
	}
	else if (credit>=42)
	{
		printf("passage conditionnel \n");
	}
	else
	{
		printf("redoublement \n");
	}
	
	}
break;

case 2:
	{
	int z;
	int m;
	signed char prenom[20],nom[10];
	printf("bienvenue dans le programme AGE\n");
	printf("donner un prenom \n");
	scanf("%s", prenom);
	printf("donner un nom \n");
	scanf("%s", nom);
	printf("donner l'annee de naissance \n");
	scanf("%d", &z);
	if (2024-z >=18)
	{
		printf("%s %s est majeure \n", prenom,nom);
	}
	else
	{
		printf("%s %s est mineure \n", prenom,nom);
	}
	if (2024-z<18)
	{
    m=z+18;
    printf("l'annee a laquelle ou %s %s sera majeure est %d \n",prenom,nom,m);
    }
	}
break;

case 3:
{
int x;
printf("\t entrer un nombre s'il vous plait\n");
scanf("%d", &x);
switch(x)
{
	case 1: printf("lundi\n");
	 break;
	case 2: printf("mardi \n"); 
	break;
	case 3: printf("mercredi \n");
	break;
	case 4: printf("jeudi\n"); 
	break;
	case 5: printf("vendredi\n");
	 break;
	case 6 :printf("samedi\n"); 
	break;
	case 7: printf("dimanche\n"); 
	break;
	default:printf("le numero choisi ne correspond a aucun jour de la semaine\n");
            printf("veuillez reessayer s'il vous plait");
}
break;

case 4:
{
float mb,mc;
printf("bienvenue dans le programme de DECISION DU JURY D'EXAMEN\n");
printf("donner la moyenne au bac \n");
scanf("%f", &mb);
printf("donner la moyenne du cycle \n");
scanf("%f", &mc);
if((mb>=16.00) || (mb>=15.50 && mb>16.00))
{
	printf("admis d'office avec mention tres bien");
}
else if((mb>=14.00) || (mb>=13.50 && mc>=14.00))
{
	printf("admis d'office avec mention bien \n");
}
else if((mb>=12.00) || (mb>=11.50 && mc>=12.00))
{
	printf("admis d'office avec mention assez bien \n");
}
else if((mb>=10.00 ) || (mb>=09.5 && mc>=10.00))
{
	printf("admis d'office avec la mention passable \n");
}
else if ((mb>=08.00) || (mb>07.50 && mc>08.00))
{
	printf("admissible \n");
}
else
{
	printf("yaye nullard \n");
}
	}
break;
}
return 0 ;
}