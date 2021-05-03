# include<stdio.h>
int main (void)
{
	int z;
	int m;
	signed char prenom[20],nom[10];
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
return 0 ;
}