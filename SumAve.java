import java.util.Scanner;

   public class SumAve{
      public static void main(String [] args){
      
      Scanner input = new Scanner(System.in);
      int[] num = new int[5];
      int sum = 0;
      
      for (int i = 0 ; i < 5; i++){
         System.out.print("Enter a number: ");
         num[i] = input.nextInt();
         sum += num[i];        
      }
      
      double ave = (double) sum / num.length;
      
      System.out.println("The sum of all numbers: " + sum);
      System.out.println("The Average of all numbers: " + ave);
      }
   }