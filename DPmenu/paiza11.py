n, x = map(int, input().split())
weight_lists = [int(input()) for i in range(n)]
weight_lists.sort()
# print(weight_lists)
dp = [0] * (x + 1)
dp[0] = 1

for i in weight_lists:
    for j in range(x, i - 1, -1):
        
           dp[j] += dp[j - i] 
           

print(dp[-1] % 1000000007 )
