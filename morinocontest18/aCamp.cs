using System;
using System.Collections.Generic;

class Program
{
    static readonly int[] Dr = { -1, 1, 0, 0 };
    static readonly int[] Dc = { 0, 0, -1, 1 };

    static void Main()
    {
        var size = Console.ReadLine().Split();
        int height = int.Parse(size[0]);
        int width = int.Parse(size[1]);

        char currentPlayer = Console.ReadLine()[0];

        char[][] board = new char[height][];

        var aQueue = new Queue<(int row, int col)>();
        var bQueue = new Queue<(int row, int col)>();

        for (int row = 0; row < height; row++)
        {
            board[row] = Console.ReadLine().ToCharArray();

            for (int col = 0; col < width; col++)
            {
                if (board[row][col] == 'A')
                {
                    aQueue.Enqueue((row, col));
                }
                else if (board[row][col] == 'B')
                {
                    bQueue.Enqueue((row, col));
                }
            }
        }

        int passCount = 0;

        while (passCount < 2)
        {
            bool expanded;

            if (currentPlayer == 'A')
            {
                expanded = ExpandTerritory(board, aQueue, 'A');
            }
            else
            {
                expanded = ExpandTerritory(board, bQueue, 'B');
            }

            if (expanded)
            {
                passCount = 0;
            }
            else
            {
                passCount++;
            }

            currentPlayer = currentPlayer == 'A' ? 'B' : 'A';
        }

        int aCount = 0;
        int bCount = 0;

        for (int row = 0; row < height; row++)
        {
            for (int col = 0; col < width; col++)
            {
                if (board[row][col] == 'A')
                {
                    aCount++;
                }
                else if (board[row][col] == 'B')
                {
                    bCount++;
                }
            }
        }

        Console.WriteLine($"{aCount} {bCount}");
        Console.WriteLine(aCount > bCount ? "A" : "B");
    }

    static bool ExpandTerritory(char[][] board, Queue<(int row, int col)> queue, char player)
    {
        int height = board.Length;
        int width = board[0].Length;

        int currentQueueSize = queue.Count;
        bool expanded = false;

        for (int i = 0; i < currentQueueSize; i++)
        {
            var cell = queue.Dequeue();

            for (int direction = 0; direction < 4; direction++)
            {
                int nextRow = cell.row + Dr[direction];
                int nextCol = cell.col + Dc[direction];

                if (nextRow < 0 || nextRow >= height || nextCol < 0 || nextCol >= width)
                {
                    continue;
                }

                if (board[nextRow][nextCol] != '.')
                {
                    continue;
                }

                board[nextRow][nextCol] = player;
                queue.Enqueue((nextRow, nextCol));
                expanded = true;
            }
        }

        return expanded;
    }
}