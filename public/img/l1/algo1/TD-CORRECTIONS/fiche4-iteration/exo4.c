#include<stdio.h>
int main()
{
	float x,min ,max,som=0;
	int i=0;
		do
		{
			printf("donner un nombre\n");
			scanf("%f", &x);
		}
		while(x==0);
		min=x;
		max=x;

		while(x!=0)
		{
			if (x<min)
			{
				min=x;
			}
			if (x>max)
			{
				max=x;
			}
			i++;
			som=som+x;
			printf("donner un nombre\n");
			scanf("%f", &x);
		}
		printf("le minimum est%.2f\n", min);
		printf("le maximum est %.2f\n",max );
		printf("la moyenne est %.2f\n",som/i );
}