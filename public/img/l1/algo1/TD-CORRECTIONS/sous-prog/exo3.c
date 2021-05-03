#include<stdio.h>
#include<stdlib.h>

typedef struct comptebancaire
{
	int numero;
	char nom[20];
	char prenom[50];
	float solde;
}
comptebancaire;
//retrait d'un montant
void retrait(comptebancaire *A, int montant)
{
	if(montant<=(*A).solde){
		(*A).solde-=montant;
		//printf("retrait effectue\n");

	}
	else
		printf("solde insuffisant ==> RETRAIT IMPOSSIBLE\n");

}

//depot d'un montant
void depot (comptebancaire *A, int montant)
{
	(*A).solde+=montant;
	//printf("depot effectuee\n");
}

void virement (comptebancaire *A, comptebancaire *B, int montant)
{
	if((*A).solde>=montant)
	{

		depot(B, montant);
		//printf("virement effectuee\n");

	}
	retrait(A, montant);
}

void afficher(comptebancaire A)
{
	printf(" Mr ou Mme %s\n\t",A.nom);
	printf("Ne(e) %s %s\n\t",A.prenom,A.nom);
	printf("===>Ayant comme solde en banque%f\n\t\t",A.solde);
	printf("====>Ayant le numero de compte%d\n",A.numero);
}


	comptebancaire ouvrir(void)
	{
		comptebancaire A;
		A.numero=rand();
		printf("entrer votre nom : ");
		scanf("%s",A.nom);
		printf("entrer votre prenom : ");
		scanf("%s",A.prenom);
		printf("entrer votre solde : ");
		scanf("%f",&A.solde);
		return A;

	}

	int main()
	{
		comptebancaire A,B;
		int montant1;
		printf("\n");
		printf("CECI SONT LES COORDONNEES DU PREMIER CLIENT\n");
		A=ouvrir();

		printf("\n");
		printf("entrer le montant que vous souhaitez transferer au second client svp: ");
		scanf("%d",&montant1);


		printf("\n");
		printf("CECI SONT LES COORDONNEES DU SECOND CLIENT\n");
		B=ouvrir();
		

		depot(&A,montant1);
				
		retrait(&A,montant1);
			
		virement(&A,&B,montant1);

		printf("\n");
		printf("cher premier client voici l'etat de votre compte\n");
		afficher(A);


		printf("\n");
		printf("cher second client voici l'etat de votre compte\n");
		afficher(B);
		
	}
