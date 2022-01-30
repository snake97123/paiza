n, x, a, y, b = map(int, input().split())
dp = [10000000] * (n + y)
dp[0] = 0

for i in range(x, n + y):
    if i - x >= 0:
        dp[i] = min(dp[i], dp[i - x] + a)
    if i - y >= 0:
        dp[i] = min(dp[i], dp[i - y] + b)

print(min(dp[n:]))