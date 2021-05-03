#include<stdio.h>
#include<stdlib.h>
#include<string.h>

int main()
{
	FILE*src=fopen("impair.txt","a+");
	FILE*dest=fopen("premier.txt","w");
	char c;int i, n=500;
//	int y;

	for(i=0;i<500;i++){
	if((i%2) != 0)
	{
		fprintf(src," %d ",i);
	}
   }

   fclose(src);
/*
	 printf("\n");
	 printf("\n");

   src=fopen("impair.txt","r");
   while((c=fgetc(src))!=EOF)
   {
		 //y = atoi(c);
		 //printf("%c",c);
   	 fputc(c,dest);
   }


   fclose(dest);
*/
}
