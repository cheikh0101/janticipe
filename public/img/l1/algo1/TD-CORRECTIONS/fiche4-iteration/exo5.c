#include<stdio.h>
int main()
{
	int i;
	float x,forte,faible,som=0;
		for (i = 0; i < 10; ++i)
		{
			do
			{
				printf("donner un nombre\n");
				scanf("%f", &x);
			}
			while(x<0 || x>20);

			if(i==1)
			{
				forte=x;
				faible=x;
			}
			else if (x<faible) 
			{
				faible=x;
			}
			if (x>forte)
			{
				forte=x;
			}
			
				som=som+x;
		}
		printf("la plus forte note est %.2f\n", forte);
		printf("la plus faible note est %.2f\n", faible);
		printf("la moyenne de la classe est %.2f\n", som/i);
}