using System;

class Program
{
    static void Main()
    {
        // 自分の得意な言語で
        // Let's チャレンジ！！
        var line = Console.ReadLine();
         var arr = line.Split(' ');
        // Console.WriteLine(arr[0]);
        
      int n = Int32.Parse(arr[0]);
      int m = Int32.Parse(arr[1]);
      
    int hosuu = (n * 1000 * 100) / m;
    if(hosuu >= 10000){
        Console.WriteLine("yes");
    } else{
        Console.WriteLine("no");
    }
    }
}