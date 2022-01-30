n, x, a, y, b, z, c = map(int, input().split())

dp = [100000] * (n + z)

dp[0] = 0

for i in range(x, n+z):
   if i - x >= 0:
        dp[i] = min(dp[i], dp[i - x] + a)
   if i - y >= 0:
        dp[i] = min(dp[i], dp[i - y] + b)
   if i - z >= 0:
        dp[i] = min(dp[i], dp[i - z] + c)
print(min(dp[n:]))