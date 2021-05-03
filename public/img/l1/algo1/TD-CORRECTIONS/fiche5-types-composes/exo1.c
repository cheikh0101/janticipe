#include <stdio.h>
#define x 5
int main(int argc, char const *argv[])
{
	int i,j,som;
	int a[x];
	for ( i = 0; i <= x-1; i++)
	{
		printf("veuillez entrer le %d element\t",i+1 );
		scanf("%d",&a[i]);


		for ( j = 0; j<=i-1; j++)
		{
			if (a[i]==a[j])
			{
				printf("!!desole!! VALEUR EXISTANTE\n");
				i=i-1;
			}
		}

	}
	for ( i = 0; i <= x-1; i++)
	{
		som=som+a[i];
	}
	printf("la somme est: %d \n",som );
	return 0;
}
