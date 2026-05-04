using System;

class Program 
{
    static void Main()
    {
        var line = Console.ReadLine().Split(' ');
        int snackCount = int.Parse(line[0]);
        int maxTotalPrice = int.Parse(line[1]);
        
        int totalPrice = 0;
        bool isWithinBudget = true;

        for (int i = 0; i < snackCount; i++)
        {
            int snackPrice = int.Parse(Console.ReadLine());
            totalPrice += snackPrice;

            if (totalPrice > maxTotalPrice)
            {
                isWithinBudget = false;
                break;
            }
        }

        Console.WriteLine(isWithinBudget ? "Yes" : "No");
    }
}