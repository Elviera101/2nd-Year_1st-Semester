import java.util.Scanner;

   public class ReverseDisplay{
      public static void main (String [] args){
      Scanner input = new Scanner(System.in);
      
      int[] num = new int[5];
      
      for (int i = 0; i < 5; i++){
         System.out.print("Enter Five number: ");
         num [i] = input.nextInt();
         
      }
      
      System.out.println("Number in Reverse: ");
      for (int i = 4; i >= 0 ; i-- ){
         System.out.println(num[i] + " ");
      }
      
      }
   }