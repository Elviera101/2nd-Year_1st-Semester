import java.util.*;

   public class MidtermLabAct{
      public static void main(String []args){
      Scanner input = new Scanner(System.in);
      
      System.out.print("Enter the number of student: ");
      int num = input.nextInt();
      int[] student = new int[num];
      
      for(int i = 0 ; i < student.length ; i++){
         System.out.print("Enter a grade for the student: ");
         student[i] = input.nextInt();
      }
      
      for(int row = 0 ; row < student.length - 1; row++){
         for(int column = 0 ; column <student.length - row - 1 ; column++){
            if(student[column] > student[column+1]){
            int temporary = student[column];
            student[column] = student[column+1];
            student[column+1] = temporary;
            }
         }
      }
      
      System.out.print("Sorted Grades: ");
      
      for(int i = 0 ; i < student.length ; i++){
         System.out.print(student[i] + " ");
      }
      System.out.println(" ");
      System.out.print("Enter grade to search: ");
      int search = input.nextInt();
      int index = -1;
      for(int i = 0 ; i < student.length ; i++){
         if (search == student[i]){
            index = 1;
            break;
         }
      }
      
      if(index == -1){
         System.out.print("The entered grade is not found!");
      }else{
         System.out.print("The " + search + " is found in index " + index + " ");
      }
      
      }
   }