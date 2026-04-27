// 整数nが素数かどうかを判断するプログラムの作成
using System;

class Program
{
    static void Main()
    {
        // 入力値の取得
        int n = int.Parse(Console.ReadLine());

        // 素数かどうかの判断
        bool isPrime = false;
        if (n > 1)
        {
            isPrime = true;
            for (int i = 2; i <= Math.Sqrt(n); i++)
            {
                if (n % i == 0)
                {
                    isPrime = false;
                    break;
                }
            }
        }
        // 結果の出力
        Console.WriteLine(isPrime ? "Yes" : "No");
    }
}