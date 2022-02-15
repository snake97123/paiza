n,m = map(int, input().split())
list_a = [input() for _ in range(n)]
list_b = [input() for _ in range(m)]

for i in list_b:
    if i in list_a:
        idx = list_a.index(i)
        print(idx + 1)
    else:
        print(-1)