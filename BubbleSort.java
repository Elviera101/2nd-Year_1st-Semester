import java.util.*;

   public class BubbleSort{
      public static void main (String [] args){
        int[] grade = {90, 95, 92, 87, 99, 100};
        
         System.out.println("Original grades: " + grade[0] + " " + grade[1] + " " + grade[2] + " " + grade[3] + " " + grade[4] + " " + grade[5] );
         
         for(int row = 0 ; row < grade.length - 1 ; row++){
            for(int column = 0 ; column < grade.length - row - 1 ; column++){
               if(grade[column] < grade[column+1]){
                  int temporary = grade[column];
                  grade[column] = grade[column+1];
                  grade[column+1] = temporary;
               }
            }
         }
          System.out.println("Sorted Grade in ascending order: " + grade[5] + " " + grade[4] + " " + grade[3] + " " + grade[2] + " " + grade[1] + " " + grade[0]);
      }
   }