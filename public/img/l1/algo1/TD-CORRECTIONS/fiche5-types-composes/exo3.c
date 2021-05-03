#include <stdio.h>
typedef struct heure
{
	int hh;
	int mm;
	int ss;
}heure;
int main()
{
	heure h1,h2,som;

	do
	{
		printf("veuillez donner le premiere heure s'il vous plait (hh/mn/ss):");
		scanf("%dh",&h1.hh);
		scanf("%dmn",&h1.mm);
		scanf("%dss",&h1.ss);
		if ((h1.hh<0)||(h1.hh>23))
		{
			printf("desole l'heure ne peut etre comprise qu'entre 0h et 23h\n");
		}
		if ((h1.mm<0)||(h1.mm>59))
		{
			printf("!!desole!! les minutes ne peuvent etre comprises qu'entre 0 et 59\n");
		}
		if ((h1.ss<0)||(h1.ss>59))
		{
			printf("!! desole !! les secondes ne peuvent ere comprises qu'entre 0 et 59\n");
		}
	}
	while((h1.hh<0)||(h1.hh>23)||(h1.mm<0)||(h1.mm>59)||(h1.ss<0)||(h1.ss>59));

	do
	{
		printf("veuillez donner la deuxieme heure s'il vous plait (hh/mn/ss):");
		scanf("%dh",&h2.hh);
		scanf("%dmn",&h2.mm);
		scanf("%dss",&h2.ss);
		if ((h2.hh<0)||(h2.hh>23))
		{
			printf("desole l'heure ne peut etre comprise qu'entre 0h et 23h\n");
		}
		
		if ((h2.mm<0)||(h2.mm>59))
		{
			printf("!!desole!! les minutes ne peuvent etre comprises qu'entre 0 et 59\n");
		}
		
		if ((h2.ss<0)||(h2.ss>59))
		{
			printf("!! desole !! les secondes ne peuvent ere comprises qu'entre 0 et 59\n");
		}
	}
	while((h2.hh<0)||(h2.hh>23)||(h2.mm<0)||(h2.mm>59)||(h2.ss<0)||(h2.ss>59));

	som.hh=0;
	som.ss=0;
	som.mm=0;
	som.ss=h1.ss+h2.ss;
	if (som.ss>59)
	{
		som.ss=som.ss-60;
		som.mm=som.mm+1;
	}
	som.mm=h1.mm+h2.mm+som.mm;
	if (som.mm>59)
	{
		som.mm=som.mm-60;
		som.hh=som.hh+1;
	}
	som.hh=h1.hh+h2.hh+som.hh;
	if (som.hh>23)
	{
		som.hh=som.hh-24;
	}

	printf("la somme entre la premiere heure(%dh/%dmn/%dss) et la deuxieme heure(%dh/%dmn/%dss) est %dh/%dmm/%dss\n",h1.hh,h1.mm,h1.ss,h2.hh,h2.mm,h2.ss,som.hh,som.mm,som.ss );






	return 0;
}
