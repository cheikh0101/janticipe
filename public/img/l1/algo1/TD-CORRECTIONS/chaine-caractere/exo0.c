#include<stdio.h>
int main()
{

	int i=0;
	char chaine[100],tmp[100];

	printf("veuillez remplir une chaine de caractere\n");
	scanf("%s",chaine);

	do
	{
		i++;
	}
	while(chaine[i] != '\0');

	printf("%s contient %d lettres\n",chaine,i );
}