import java.util.*;


public class Main {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        int n = sc.nextInt();
        
        int countA = 0;
        int countB = 0;
        int countC = 0;
        
        for (int i = 0; i < n; i++) {
            String s = sc.next();
            
            // System.out.println(s);
            
            switch(s) {
                case "A":
                    countA++;
                    break;
                case "B":
                    countB++;
                    break;
                case "C":
                    countC++;
                    break;
                default:
                    break;
            }
        }
        
        System.out.println(countA);
        System.out.println(countB);
        System.out.println(countC);
    }
}