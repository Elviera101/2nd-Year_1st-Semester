import java.util.Arrays;
import java.util.Scanner;

public class SortArray {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        
        System.out.print("How many numbers will you enter? ");
        int n = scanner.nextInt();

        int[] numbers = new int[n];

        
        System.out.println("Enter " + n + " numbers:");
        for (int i = 0; i < n; i++) {
            numbers[i] = scanner.nextInt();
        }

        
        Arrays.sort(numbers);

        
        int secondLargest = numbers[n - 2];

        System.out.println("Second largest number = " + secondLargest);

        scanner.close();
    }
}
