#include<stdio.h>

int main()
{
	
	int Days , Year;
	char input;
	printf("Days To Year Type d \n");
	printf("------------------- \n");
	printf("Year To days Type y \n");
	printf("------------------- \n");
	scanf(" %c", &input);
	
	if (input == 'd')
	{
		printf("1 Year = 365 Days \n");
		printf("Give days \n");
		scanf(" %d" , &Days);
		printf("%d", Days * 1 / 365);
		
	}else if(input == 'y')
	{
		printf("365 Days = 1 Year \n");
		printf("Give Year's' \n");
		scanf(" %d" , &Year);
		printf("%d", Year * 365 / 1);
	}else
	{
		printf("---Error---");
	}
	
}