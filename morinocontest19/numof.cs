using System;
using System.Collections.Generic;

class Program
{
    static void Main()
    {
        string[] firstLine = Console.ReadLine().Split(' ');
        int h = int.Parse(firstLine[0]);
        int w = int.Parse(firstLine[1]);

        char[,] grid = ReadGrid(h, w);

        int result = CountComponents(grid, h, w);

        Console.WriteLine(result);
    }

    static char[,] ReadGrid(int h, int w)
    {
        char[,] grid = new char[h, w];

        for (int row = 0; row < h; row++)
        {
            string line = Console.ReadLine();

            for (int col = 0; col < w; col++)
            {
                grid[row, col] = line[col];
            }
        }

        return grid;
    }

    static int CountComponents(char[,] grid, int h, int w)
    {
        bool[,] visited = new bool[h, w];
        int count = 0;

        for (int row = 0; row < h; row++)
        {
            for (int col = 0; col < w; col++)
            {
                if (!visited[row, col])
                {
                    count++;
                    Bfs(grid, visited, h, w, row, col);
                }
            }
        }

        return count;
    }

    static void Bfs(
        char[,] grid,
        bool[,] visited,
        int h,
        int w,
        int startRow,
        int startCol)
    {
        int[] dr = { -1, 1, 0, 0 };
        int[] dc = { 0, 0, -1, 1 };

        char target = grid[startRow, startCol];

        Queue<(int row, int col)> queue = new Queue<(int row, int col)>();

        visited[startRow, startCol] = true;
        queue.Enqueue((startRow, startCol));

        while (queue.Count > 0)
        {
            var current = queue.Dequeue();

            for (int i = 0; i < 4; i++)
            {
                int nextRow = current.row + dr[i];
                int nextCol = current.col + dc[i];

                if (!IsInside(nextRow, nextCol, h, w))
                {
                    continue;
                }

                if (visited[nextRow, nextCol])
                {
                    continue;
                }

                if (grid[nextRow, nextCol] != target)
                {
                    continue;
                }

                visited[nextRow, nextCol] = true;
                queue.Enqueue((nextRow, nextCol));
            }
        }
    }

    static bool IsInside(int row, int col, int h, int w)
    {
        return row >= 0 && row < h && col >= 0 && col < w;
    }
}