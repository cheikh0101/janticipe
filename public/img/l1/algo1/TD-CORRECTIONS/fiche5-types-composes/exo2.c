#include<stdio.h>
#define x 5
int main()
{
    int a,i,j,cmp;
    int t[x];

    for(i=0; i<=x-1; i++)
    {
        printf("donner le %d entier s'il vous plait :", i+1);
        scanf("%d", &t[i]);
    }
    for(i=0; i<=x-1; i++)
    {
        cmp=0;
        a=0;
        for(j=0; j<=x-1; j++)
        {
            if(t[i]==t[j])
            {
                cmp=cmp+1;
            }
            if(t[i]==t[j] && j<i)
            {
                a=1;
            }
        }
            if(a==0)
            {
                printf("le nombre d'occurrences de %d est %d\n", t[i],cmp);
            }
    }
    return 0;
}
