#include<stdio.h>
#include<stdlib.h>
#include<string.h>
#define n 100

int main ()
{
	char ch[n];
	int i=0,t=0;
	printf("veuillez taper une chaine de caractère s'il vous plait\n");
	fgets(ch, n, stdin);


	while(ch[i]!='\0')
	{
		if (ch[i]=='a' || ch[i]=='e' || ch[i]=='i' || ch[i]=='o' || ch[i]=='u' )
		{
			t++;
		}
		i++;
	}
	printf("le nombre de voyelle contenu dans %s est %d\n",ch,t );

}

//PROGRAMME PLUS SIMPLE
// mais y a erreur
/*#include<stdio.h>
#include<string.h>

int main()
{

	char voyelle[13]="aoiueyAOIUEY";
	char mot[100];
	int i,j,cpt;

	printf("donner une chaine de caractere");
	scanf("%s", mot);

	for(i=0; i<strlen(mot); i++)
	{
		for(j=0; j<strlen(voyelle); j++)
		{
			if (mot[i]==voyelle[j])
			{
				cpt++;
			}
			printf("le nombre de voyelle(s) est %d \n",cpt );
		}
	}
}*/
