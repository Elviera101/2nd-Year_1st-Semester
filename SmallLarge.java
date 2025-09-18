import java.util.Scanner;

   public class SmallLarge{
      public static void main (String [] args){
      Scanner input = new Scanner(System.in);
      int[] num = new int[6];
     
      
      for(int i = 0 ; i < 6 ; i++){
      System.out.print("Enter a number: ");
         num[i] = input.nextInt();
      }
      
      int smallest = num[0];
      int largest = num[0];
      
      for(int i =  1 ; i < 6 ; i++){
         if(num[i] > largest){
            largest = num[i];
         }
         if (num[i] < smallest){
            smallest = num[i];
         }
      }
      
      System.out.println("The Lsargest number is: " + largest);
      System.out.println("The Smallest number is: " + smallest);
      }
   }