/*#include<stdio.h>
#include<stdlib.h>

int main()
{
  int i,n,match=0,moy=0,nbre=0,*journee;

  printf("nombres d'equipes du championnat\n");
  scanf("%d",&n);

    for(i=0; i< n; i++)
    {
      match+=i;
    }
    
    printf("%d", match);

    journee = (int*) malloc (sizeof(int)*match);

    for(i=0; i<match; i++)
    {
      printf("score a la journee %d\n",i+1 );
      scanf("%d",&journee[i] );
    	    moy+=journee[i];

    }


    for(i=0; i<match; i++)
    {
      if(journee[i]>(moy/match))
      {
        nbre++;
      }
    }

    printf("la moyenne des scores %d a ete depasse en %d journee(s)\n",moy/match,nbre );

}*/


#include<stdio.h>
#include<stdlib.h>

int main()
{
  int equipe,i,match=0,j=0,moyenne,tbut=0,*classement;

  printf("veuillez donner le nombre d'equipe du championnat : ");
  scanf("%d",&equipe);

  printf("\n");

  for(i=0; i<equipe;i++)
  {
  	match = match +i;
  } 
  classement = malloc (sizeof(int) * match);

  for(i=0; i<match; i++)
  {
    printf("quel est le nombre de buts du %d match\n",i+1 );
    scanf("%d",&classement[i] );
  }

  for(i=0; i< match; i++)
  {
    tbut = tbut + classement[i];
  }

  moyenne =  tbut / match ;   // nombre total de match/nombre total de but

  for(i=0; i< match; i++)
  {
    if (classement[i] > moyenne)
    {
      j++;
    }
  }

  printf("la moyenne des buts a ete depasse en %d match(s)\n",j );
}
