import java.util.Scanner;

   public class EvenReverse{
      public static void main (String [] args){
      Scanner input = new Scanner(System.in);
      System.out.print("Number for array: ");
      int n = input.nextInt();
      int[] arr = new int[n];
      
      for (int i = 0 ; i < n ; i++){
         System.out.print("Enter a number: ");
         arr[i] = input.nextInt();
      }
      
      System.out.println("Even index in reverse: ");
      for (int i = n - 1 ; i >= 0 ; i--){
         if(arr[i] % 2 == 0){
           System.out.print(arr[i] + " ");
         }
      }
      
      }
   }