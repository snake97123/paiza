using System;

class Program
{
    static void Main()
    {
        var hw = Console.ReadLine().Split();
        int H = int.Parse(hw[0]);
        int W = int.Parse(hw[1]);

        char[][] forest = new char[H][];
        int ax = -1;
        int ay = -1;

        for (int i = 0; i < H; i++)
        {
            forest[i] = Console.ReadLine().ToCharArray();

            for (int j = 0; j < W; j++)
            {
                if (forest[i][j] == 'A')
                {
                    ax = i;
                    ay = j;
                }
            }
        }

        int[] dx = { -1, 1, 0, 0 };
        int[] dy = { 0, 0, -1, 1 };

        for (int d = 0; d < 4; d++)
        {
            int x = ax + dx[d];
            int y = ay + dy[d];

            while (x >= 0 && x < H && y >= 0 && y < W)
            {
                if (forest[x][y] == 'T')
                {
                    break;
                }

                if (forest[x][y] == '.')
                {
                    forest[x][y] = 'V';
                }

                x += dx[d];
                y += dy[d];
            }
        }

        for (int i = 0; i < H; i++)
        {
            Console.WriteLine(new string(forest[i]));
        }
    }
}