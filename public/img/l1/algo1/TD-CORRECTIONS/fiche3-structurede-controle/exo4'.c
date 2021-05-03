#include<stdio.h>
int  main()
{ float MB,MC;
printf(" Entrer la moyenne au Bac du candidat : \n") ;
scanf("%f",&MB) ;
printf(" Entrer la moyenne de Cycle du candidat : \n") ;
scanf("%f",&MC) ;
if(MB>=16)
{printf("Admis(e) d office avec la mention Très Bien \n") ;}
else
{
if((MB>=15.5)&&(MC>=16))
{MB=16; printf("Admis(e) d office avec la mention Très Bien \n") ;}
else
{
if (MB>=14)
{printf("Admis(e) d office avec la mention Bien \n") ;}
else
{
if((MB>=13.5)&&(MC>=14))
{MB=14; printf("Admis(e) d office avec la mention Bien \n") ;}
else
{
if(MB>=12)
{printf("Admis(e) d office avec la mention Assez Bien \n") ;}
else
{
if((MB>=11.5)&&(MC>=12))
{MB=12; printf("Admis(e) d office avec la mention Assez Bien \n") ;}
else
{
if(MB>=10)
{printf("Admis(e) d office avec la mention Passable \n") ;}
else
{
if ((MB>=9.5)&&(MC>=10))
{MB=10; printf("Admis(e) d office avec la mention Passable \n") ;}
else
{
if(MB>=8)
{printf("Admissible \n") ;}
else
{
if ((MB>=7.5)&&(MC>=8))
{MB=8; printf("Admissible \n") ;}
else
{printf("Le candidat a echoue au bac \n");}
}
}
}
}
}
}
}
}
}
}