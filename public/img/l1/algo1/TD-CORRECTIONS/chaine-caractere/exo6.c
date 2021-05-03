

#include <stdio.h>
#include <string.h>
#include <stdlib.h>
#define TAILLE_MAX 100
int main()
{
char chaine[TAILLE_MAX];
int i,j,a,len,cpt,num=1,den=1;
printf("Entrez une chaine de caractere\n");
//gets(chaine);
scanf("%s", chaine);


//Il d'abord ramener toute la chaine soit au minuscule ou au majuscule
//Pour que les caracteres repétés aient meme code ASCII sinon le M et m
//De Matam sera vu comme deux lettres differentes.
//commande pour mettre la chaine en minuscule


//strlwr(chaine);

len=strlen(chaine);
for(i=0;i<=len-1;i++)
{
	num=num*(i+1);

	cpt=0;a=0;  //==>on utilise la methode d'occurence

	for(j=0;j<=len-1;j++)
	{
		if(chaine[i]==chaine[j])
			{cpt++;}

		if((chaine[i]==chaine[j])&&(j<i))
			{a=1;}
	}

	if((a==0)&&(cpt>=2))
	{

		for(j=1;j<=cpt;j++)
		{den=den*j;}

	}
}
printf("Le nombre d anagramme de %s est %d\n",chaine,num/den);
return 0;

}
