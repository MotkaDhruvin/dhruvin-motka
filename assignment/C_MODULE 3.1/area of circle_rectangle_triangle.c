#include<stdio.h>
int main()
{
	
	int Option;
	
	float base,height,breadth,length,area,redius,range;
	

//	find area of circle, rectangle and triangle
	
	printf("1. area of circle \n2. area of rectangle\n3. find area of triangle \n");
	printf("\n");
	printf("\n");
	
	printf("Enter The Option Number of which you want area of \n");
	scanf("%d", &Option);
	
	switch (Option){
		case 1 :{
			printf("You have selected option 1 \nso now enter redius \n");
			scanf("%f", &redius);
			area = 3.141592654 * redius * redius ; 
			printf("area of circle = %f \n" , area);
			break;
		}
		case 2 : {
			printf("You have selected option 2 \nso now enter breadth,length \n");
			scanf("%f %f", &breadth , &length);
			area = breadth * length;
			printf("area of rectangle = %f \n", area);
			break;
		}
		case 3 : {
			printf("You have selected option 3 \nso now enter base and height \n");
			scanf("%f %f", &base , &height);
			area = 0.5 * base * height;
			printf("area of rectangle = %f \n", area);
			break;
		}
		default:{
			printf("ivalid Input \n");
			break;
		}
	}
 
}