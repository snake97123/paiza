using System;

class Program
{
    static void Main()
    {
        var line = Console.ReadLine();
        int N = int.Parse(line);
        for(int i = 1; i <= N; i++)
        {
            Console.WriteLine(GetFizzBuzz(i));
        }
        
        
    }
    
    public static string GetFizzBuzz(int number)
        {
            if (number % 3 == 0 && number % 5 == 0)
            {
                return "Fizz Buzz";
            }
            
            if (number % 5 == 0)
            {
                return "Buzz";
            }
            
            if (number % 3 == 0)
            {
                return "Fizz";
            }
            
            return number.ToString();
        }
}