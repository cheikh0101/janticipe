#include<stdio.h>
int main()
{
    int x,tmp;
    float i,s;
    i=0;
    s=0;
    do
    {
        printf("donne un nombre \n");
        scanf("%d", &x);
    }
    while(x<=0);
    tmp=x;
    do
    {
        s=s+x%10;
        x=x/10;
        i++;
    }
    while(x!=0);
    printf("la moyenne des %4.2f chiffres dans %d est de %4.2f", i,tmp,s/i);
    
    return 0 ;
}