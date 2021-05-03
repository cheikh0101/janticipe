#include<stdio.h>
int main()
{
int i,x,f;
	do
	{
		printf("donner un nombre \n");
		scanf("%d", &x);
	}
    while(x<0);
	f=1;
	i=1;
	while ( i<=x )
	{
	f=f*i;
	i++;
	}
	printf("le factoriel de %d est %d \n", x,f);


	return 0;
}