//C'EST LE MEME PROGRAMME MAIS MOINS OPTIMISE

/*#include <stdio.h>
#include<string.h>
#define x 100

int main()

{
	char chaine[x],tmp[100];
	int i,t=0,c;

		printf("veuillez taper une chaine de caractere\n");
		scanf("%s", chaine);

		//c=strlen(chaine);

		for (i = 0; i < (strlen(chaine)/2); i++)
		{
			if (chaine[i]!=chaine[strlen(chaine)-1-i])
			{
				t++;
			}
		}

		if (t>=1)
		{
			puts(chaine);
			printf("est tout sauf un palindrome\n");
		}
		else
		{
			printf("cette chaine de caractere est un palindrome\n");
		}

}*/

//LE MEME PROGRAMME MAIS EN UTILISAN LE return 0;; POUR L'OPTMISER

#include <stdio.h>
#include<string.h>
#define x 100

int main()

{
	char chaine[x];
	int i=0;

		printf("veuillez taper une chaine de caractere\n");
		scanf("%s", chaine);


		for (i = 0; i < (strlen(chaine)/2); i++)
		{
			if (chaine[i]!=chaine[strlen(chaine)-1-i])
			{
				printf(" %s est tout sauf un palindrome\n",chaine);
				return 0;
			}
		}

			printf("cette chaine de caractere est un palindrome\n");

}
