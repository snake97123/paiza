using System;
using System.Linq;

class Program
{
    static void Main()
    {
        // 自分の得意な言語で
        // Let's チャレンジ！！
        // 入力値の取得
        int[] line = Console.ReadLine().Split(' ').Select(int.Parse).ToArray();
        int n = line[0];
        int k = line[1];
        
        // 座席番号を求める
        // int syou = k % n;
        // int seatNumber;
        
        // if (syou == 0) {
        //     seatNumber = n;
        // } else {
        //     seatNumber = syou;
        // }
        int seatNumber = (k - 1) % n + 1;
        
        Console.WriteLine(seatNumber);
        // Console.WriteLine();
        
    }
}