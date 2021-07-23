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
        
         if(n > m){
             Console.WriteLine(n - m);
         } else {
             Console.WriteLine(m - n);
         }
    }
}