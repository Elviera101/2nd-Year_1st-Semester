import java.util.Scanner;

   public class EvenOdd{
      public static void main (String [] args){
      
      int num[] = new int[5];
      int evenCount = 0;
      int oddCount = 0;
      
      Scanner input = new Scanner(System.in);
      
      for(int i = 0; i < 5 ; i++){
         System.out.print("Enter a number: ");
         num[i] = input.nextInt();
         
         if (num[i] % 2 == 0){
            evenCount++;
         }else{
            oddCount++;
         }
         }
      System.out.println("The number of even: " + evenCount);
      System.out.println("The number of odd: " + oddCount);
      
      }
   }