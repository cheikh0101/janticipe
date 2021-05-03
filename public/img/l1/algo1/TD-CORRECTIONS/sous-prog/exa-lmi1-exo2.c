#include<stdio.h>
#include<stdlib.h>
#include<string.h>


typedef struct compte
{
  int numero;
  float solde;
  char prenom[25];
  char nom[25];
}compte;


compte information()
{
  compte a;
  static int i=2019001;

  printf("les informations svp\n" );

  printf("votre prenom svp :");
  scanf("%s", a.prenom);

  printf("votre nom svp :");
  scanf("%s",a.nom);

  printf("votre solde svp :");
  scanf("%f", &a.solde);

  a.numero = i;

  i++;

  return a;

}

void affichage(compte a)
{

printf("votre prenom est %s\n",a.prenom);

printf("votre nom est %s\n",a.nom);

printf("votre solde est de .....%f\n",a.solde);

printf("votre numero de compte est ...%d\n",a.numero);

}



  void chercher(compte *tab,int numero,int nbre)
  {
    int i,cpt=0;
    for(i=0; i<nbre; i++)
    {
      if(tab[i].numero == numero)
      {
        printf("mr %s %s ceci est votre numero\n",tab[i].nom,tab[i].prenom);
        cpt++;
      }
    }

    if(cpt==0)
    {
      printf("sorry! mais sa numero nekoul ssi liste bii\n");
    }
  }


int main()
{
  compte b,*tab=NULL;
  int nbre,numero;
  char prenom[25],nom[25];
  float solde;

  printf("entrer le nombre de clients svp  :" );
  scanf("%d",&nbre);

  tab = malloc(sizeof(compte) * nbre);

  for(int i=0; i<nbre; i++)
  {
    printf("\n");
      printf("information du %d client\n",i+1);

      b = information();

        printf("\n");

        printf("votre prenom est %s\n",b.prenom);
        strcpy(tab[i].prenom,b.prenom);

        printf("votre nom est %s\n",b.nom);
        strcpy(tab[i].nom, b.nom);

        printf("votre solde est de .....%f\n",b.solde);
        tab[i].solde = b.solde;

        printf("votre numero de compte est ...%d\n",b.numero);
        tab[i].numero = b.numero;

       affichage(b);


  }

  printf("\n");



//---------------------------RECHERCHER DES INFOS VIA LE NUMERO DE COMPTE RECU EN PARAMETRE------------------------
  printf("recherche d'information via un numero recu en PARAMETRE\n" );


    printf("\n");

    printf("votre numero de compte svp ..:");
    scanf("%d",&numero);

    chercher(tab,numero,nbre);

//------------------------------FIN--------------------------------------------

}
