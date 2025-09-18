import java.util.Scanner;

   public class LSArray{
      public static void main (String [] args){
      Scanner input = new Scanner(System.in);
      
      System.out.print("Enter a number of elements: ");
      int n = input.nextInt();
      int[] arr = new int[n];
      
      
      for(int i = 0 ; i < n ; i++){
      System.out.print("Enter a number: ");
      arr[i] = input.nextInt();
      }
      
      int smallest = arr[0];
      int largest = arr[0];
      
      for(int i = 0 ; i < n ; i++){
         if(arr[i] > largest){
            largest = arr[i];
         }
         
        if(arr[i] < smallest){
            smallest = arr[i];
        }
      }
      System.out.println("The smallest element is: " + smallest);
      System.out.println("The largest element is: " + largest);
      }
   }