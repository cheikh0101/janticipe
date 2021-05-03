/*#include<stdio.h>
#include<stdlib.h>


  //L'INVERSE D'UN nombre
  float inverse(float x);
  float inverse(float x)
  {
  /*printf("donner un nombre\n");
  scanf("%f",&x);
  printf("l'inverse de %.2f est %.2f\n",x,1/x );*/
  /*return 1/x;
  }

 //MAXIMUM ENTRE 2 NOMBRES
  /*float max(float a ,float b);
  float max(float a, float b)
  {
    if (a>b)

    return a;
  }

  //PARITE D'UN NOMBRE
  int parite(int c);
  int parite(int c)
  {

    return c%2;
  }

  /*LE MINIMUM ENTRE LES 3 NOMBRES
  float minimum(float x,y,z);
  float minimum(float x,y,z)
  {
  printf("donner le premier nombre\n");
  scanf("%f",&x );
  printf("entrer le deuxieme nombre\n");
  scanf("%f",&y );
  printf("donner le troisieme nombre\n");
  scanf("%f",&z);

  if (x<y && x<z)
  {
    printf("%.2f est le minimum entre les 3 nombres\n",x );
  }
  else if(y<x && y<z)
  {
    printf("%.2f est le minimum entre les nombres\n",y);
  }
  else
  {
    printf("%.2f est le minimum entre les 3 nombres\n",z );
  }

  return
  }

*/

/*int main(int argc, char const *argv[])
{
  float x;
  printf("bienvenue dans le macro qui determine l'inverse d'un nombre \n");
   printf("donner un nombre\n");
  scanf("%f",&x);
  printf("l'inverse de %.2f est %.2f\n",x,inverse(x) );


  int c;

printf("bienvenue dans le programme qui determine la parite d'un nombre \n");
  do
    {
      printf("donner un entier\n");
      scanf("%d",&c);
      if (c<=0)
      {
        printf("WAY DO NEKK NITT\n");
      }
    }
    while(c<=0);


    if (parite(c)==0)
    {
      printf("%d est un nombre pair\n",c );
    }
    else
    {
      printf("%d est impaire\n",c );
    }

    float a;
     float b;

     printf("bienvenue dans ce macro qui determine le MAXIMUM entre deux nombres \n");

      printf("entrer le 1er nombre\n");
    scanf("%f",&a );
    printf("entrer le deuxieme nombre\n");
    scanf("%f",&b );

    if (a>b)
    {
      printf("%.2f est superieur  \n",max(a));
    }
    else
    {
      printf("%.2f est superieur a %.2f \n",b,a );
    }

  return 0;
}*/


#include<stdio.h>

#define inverse(x) printf("l'inverse de %.2f est %.2f \n",x,1/x );

#define parite(x) if ((int)x%2==0) {printf("%.2f est un nombre pair\n", x);}\
                  else{printf("%.2f est impaire\n",x );}

#define max(x,y) if(x>y){printf("%.2f est le maximum\n",x );}\
                  else{printf("%.2f est le maximum\n",y );}

#define min(x,y) if(x>y){printf("%f est le minimum\n",y );}\
                else{printf("%.2f est le minimum\n",x );}

int main()
{
  float x,y;
  printf("veuillez donner un nombre\n");
  scanf("%f",&x);

  inverse(x);
  parite(x);

  printf("veuillez donner un deuxieme nombre\n");
  scanf("%f",&y);

  max(x,y);

  min(x,y);
}
