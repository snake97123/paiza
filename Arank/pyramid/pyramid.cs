// 回答の方針
// DP（動的計画法）を使う。前のピラミッドとの合計値をどんどん残すようにしていき回答を作成する。

using System;
using System.Linq;

class Program
{
    static void Main()
    {
        int N = int.Parse(Console.ReadLien());

        // ジャグ配列を作成。これによって各要素数が違う時に表現することができる。
        int[][] dp = new int[N][];

        for(int i = 0; i < N; i++) {
            int[] row = Console.ReadLine()
                               .Split()
                               .Select(int.Parse)
                               .ToArray();
            // 要素数がi + 1の配列の初期化
            dp[i] = new int[i + 1];

            for(int j = 0; j <= i; j++) {
                // 1段目
                if(i == 0) {
                    dp[i][j] = row[j];
                }

                // 一番左
                else if (j == 0)
                {
                    dp[i][j] = dp[i - 1][j] + row[j];
                }

                // 一番右
                else if (j == i)
                {
                    dp[i][j] = dp[i - 1][j - 1] + row[j];
                }

                // 真ん中
                else {
                    dp[i][j] = Math.Max(dp[i - 1][j - 1], dp[i - 1][j]) + row[j];
                }
            }
        }

        Console.WriteLine(dp[N - 1].Max());
    }
}