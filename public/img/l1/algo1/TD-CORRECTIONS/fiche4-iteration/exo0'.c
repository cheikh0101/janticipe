#include<stdio.h>
int main()
{
int f,x,i;
    do
    {
        printf("donner un nombre\n");
        scanf("%d", &x);
    }
    while(x<0);
    if (x==1)
    {
    	printf("le factoriel de 1 est 1\n");
    }
    if (x==0)
    {
    	printf("le factoriel de 0 est 1\n");
    }
    f=1;
    for(i==2; i<=x; i++)
    {
        f=f*i;
    }
    printf("le factoriel de %d est %d \n", x,f);
}