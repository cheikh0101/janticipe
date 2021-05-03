#include <stdio.h>
#include <string.h>
#include <stdlib.h>


int main(int argc, char const *argv[])
{

	int i=0,cpt=0;
	char chaine[100];
	char lettre;


	printf("veuillez taper un caractere\n" );
	scanf("%c",&lettre);

	printf("Veuillez taper une chaine de caractere s'il vous plait\n");
	scanf("%s", chaine);
	//gets(chaine);

	while(chaine[i] != '\0')
	{
		if(chaine[i] == lettre)
		{
			cpt++;
		}
		i++;
	}

	printf("la chaine %s contient %d fois le caractere %c\n",chaine,cpt,lettre );

}
