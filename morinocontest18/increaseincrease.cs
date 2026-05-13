using System;

class Program
{
    static void Main()
    {
        var personCount = int.Parse(Console.ReadLine());
        int[] personsHeight = new int[personCount];

        for(int i = 0; i < personCount; i++)
        {
            int height = int.Parse(Console.ReadLine());
            personsHeight[i] = height;
        }

        bool heightFlag = true;

        for(int i = 0; i < personCount - 1; i++)
        {
            if(personsHeight[i] > personsHeight[i + 1])
            {
                heightFlag = false;
                break;
            }
        }

        Console.WriteLine(heightFlag ? "Yes" : "No");
    }
}