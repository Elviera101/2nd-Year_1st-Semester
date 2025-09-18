import java.util.Scanner;

   public class SecondLargest{
      public static void main(String [] args){
         Scanner input = new Scanner(System.in);
         System.out.print("How many numbers will you enter? ");
         int n = input.nextInt();
         
         int [] num = new int[n];
         
         for(int i = 0 ; i < n ; i++){
            System.out.print("Enter a number: ");
            num[i] = input.nextInt();
         }    
         
         int largest = Integer.MIN_VALUE;
         int secondLargest =Integer.MIN_VALUE;
         
         for(int numbers : num){
            if (numbers > largest){
                secondLargest = largest;
                largest = numbers;
            }else if(numbers > secondLargest && numbers != largest){
               secondLargest = numbers;
            }
         }    
       if (secondLargest == Integer.MIN_VALUE) {
            System.out.println("No second largest number (all numbers may be equal).");
        } else {
            System.out.println("Second largest number = " + secondLargest);
        }

      }
   }