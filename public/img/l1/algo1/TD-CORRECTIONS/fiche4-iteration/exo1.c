#include<stdio.h>
int main()
{
    int x;
    do
    {
        printf("\t donne un nombre\n");
        scanf("\t %d", &x);
    } 
    while(x<=0); 
       if(x % 2==0)
    {
        printf("\t%d est pair", x);
    }
    else
    {
        printf("\t%d est impair", x);
    }
    return 0;
}