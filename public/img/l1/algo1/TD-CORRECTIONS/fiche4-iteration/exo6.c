#include<stdio.h>
#include<stdlib.h>
int main()	
{
	int n,i,cmp,tmp;
		do
		{
			printf("entrer un nombre\n");
			scanf("%d", &n);
		}
		while(n<=1);
		i=2;
		tmp=n;
		while(i<=n)
		{
			cmp=0;
			while(n%i==0)
			{
				n=n/i;
				cmp++;
			}
			if (cmp!=0)
			{
				printf("la decomposition de %d donne\n %d a la puissance %d\n", tmp,i,cmp);
			}
			i++;
		}
}