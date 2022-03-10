n,k,f = map(int,input().split())
seats = [int(input()) for _ in range(k)]

remain_seats = seats[f:]
ans = list(dict.fromkeys(remain_seats))
for i in ans:
    print(i)