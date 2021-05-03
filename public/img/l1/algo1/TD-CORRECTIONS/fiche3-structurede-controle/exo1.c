#include <stdio.h>
int main()
{
	int credit;
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
	
	return 0;
}