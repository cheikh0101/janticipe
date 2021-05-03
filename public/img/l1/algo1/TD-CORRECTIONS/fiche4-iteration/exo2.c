#include<stdio.h>
int main()
{
int x,y,i,min,max,ppcm,pgdc;
    do
    {
        printf("bienvenue dans le menu du programme qui calcule le ppcm et le pgdc\n");
        printf("donner un nombre \n");
        scanf("%d", &x);      
        printf("donne un autre nombre \n");
        scanf("%d", &y);
    }
    while(x<=0 || y<=0);
    if(x<=y)
    {
       min=x;
       max=y;
    }
    else
    {
    	max=x;
        min=y;
    }
    for (i = 1; i <= min; ++i)
    {
        if(x%i==0 && y%i==0)
            {      
              pgdc=i;
            }
    }
    for (i = x*y; i >= max; --i)
    {
        if (i%x==0 && i%y==0)
        {
            ppcm=i;
        }
    }
    printf("le pgdc(%d;%d) est :%d\n", x,y,pgdc);
    printf("le ppcm(%d;%d) est :%d\n", x,y,ppcm);
	return 0;
}