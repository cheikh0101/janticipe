#include<stdio.h>
int main (void)
{
float mb,mc;
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
	return 0 ;
}