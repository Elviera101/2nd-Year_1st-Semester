import java.util.*;

   public class Ascending{
      public static void main (String [] args){
      Scanner input = new Scanner(System.in);
      System.out.print("Number for array: ");
      int n = input.nextInt();
      int[] a = new int[n];
      
      for(int i = 0 ; i < n ; i++){
         System.out.print("Enter a number: ");
         a[i] = input.nextInt();
      }
      Arrays.sort(a);
      
      System.out.print("Number in Ascending: ");
      for(int b : a){
         System.out.print(a + " ");
      }
      }
   }