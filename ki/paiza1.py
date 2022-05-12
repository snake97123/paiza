N = int(input())
lists = [[0] * N for i in range(N)]

for i in range(N - 1):
    a,b = map(int, input().split())
    lists[a - 1][b - 1] = 1
    lists[b - 1][a - 1] = 1

for i in lists:
    print(*i)