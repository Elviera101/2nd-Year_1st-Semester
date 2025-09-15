import java.util.Scanner;

   public class ReverseEven{
      public static void main(String [] args){
         Scanner input = new Scanner(System.in);
         int[] num = new int[10];
         
         for (int i = 0 ; i < 10 ; i++){
            System.out.print("Enter a number: ");
            num[i] = input.nextInt();
         }
         System.out.println("Even in index in reverse: ");
         for (int i = num.length - 1 ; i >= 0 ; i--){
           if(i % 2 == 0){
            System.out.print(num[i] + " ");
            }
         }
      }
   }