import java.util.*;

public class Main {
    public static void main(String[] args) {
        // 自分の得意な言語で
        // Let's チャレンジ！！
        Scanner sc = new Scanner(System.in);
        String line = sc.nextLine();
        String [] numbers = line.trim().split("\\s+");
        int num1 = Integer.parseInt(numbers[0]); 
        int num2 = Integer.parseInt(numbers[1]);
        
        int answer = num1 % num2;
        System.out.println(answer);
    }
}