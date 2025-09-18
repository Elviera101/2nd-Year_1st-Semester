import java.util.*;

   public class Descending {
      public static void main (String [] args){
         Scanner input = new Scanner(System.in);
         System.out.print("Enter a number for array: ");
         int n = input.nextInt();
         Integer[] a = new Integer[n];
         
         for(int i = 0 ; i < n ; i++){
            System.out.print("Enter a number: ");
            a[i] = input.nextInt();
         }
         Arrays.sort(a, Collections.reverseOrder());
         
         System.out.print("Number in descending order: ");
         for(int b : a){
            System.out.print(b + " ");
         }
         
      }
   }