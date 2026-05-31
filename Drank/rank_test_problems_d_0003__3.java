import java.util.*;

public class Main {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int input = scanner.nextInt();
        int remainingToHundred = 100 - input;

        System.out.println(remainingToHundred);

        scanner.close();
    }
}