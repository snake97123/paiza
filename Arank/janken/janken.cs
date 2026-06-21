using System;

class Program
{
    static void Main()
    {
        string[] input = Console.ReadLine().Split();
        int N = int.Parse(input[0]);
        int M = int.Parse(input[1]);

        string s = Console.ReadLine();

        int[,] dp = new int[N + 1, M + 1];

        // 到達できない状態を -1 にする
        for (int i = 0; i <= N; i++)
        {
            for (int j = 0; j <= M; j++)
            {
                dp[i, j] = -1;
            }
        }

        // 0回目、指の合計0本、勝利数0
        dp[0, 0] = 0;

        for (int i = 0; i < N; i++)
        {
            char opponent = s[i];

            for (int fingers = 0; fingers <= M; fingers++)
            {
                if (dp[i, fingers] == -1)
                {
                    continue;
                }

                // グーを出す
                Update(dp, i, fingers, 0, IsWin('G', opponent), M);

                // チョキを出す
                Update(dp, i, fingers, 2, IsWin('C', opponent), M);

                // パーを出す
                Update(dp, i, fingers, 5, IsWin('P', opponent), M);
            }
        }

        Console.WriteLine(dp[N, M]);
    }

    static void Update(
        int[,] dp,
        int i,
        int currentFingers,
        int addFingers,
        bool isWin,
        int maxFingers)
    {
        int nextFingers = currentFingers + addFingers;

        if (nextFingers > maxFingers)
        {
            return;
        }

        int addWin = isWin ? 1 : 0;

        dp[i + 1, nextFingers] = Math.Max(
            dp[i + 1, nextFingers],
            dp[i, currentFingers] + addWin
        );
    }

    static bool IsWin(char myHand, char opponentHand)
    {
        return
            myHand == 'G' && opponentHand == 'C' ||
            myHand == 'C' && opponentHand == 'P' ||
            myHand == 'P' && opponentHand == 'G';
    }
}