# n, x = map(int, input().split())
# weights_list = [int(input()) for i in range(n)]
# weights_list.sort()

# dp = [[False] * (x + 1) for _ in range(n+1)]

# dp[0][0] = True

# for i in range(n):
#     for j in range(x+1):
        
#         if not dp[i][j]:
#             continue
        
#         dp[i + 1][j] = True

n, x = map(int, input().split())
a = [int(input()) for i in range(n)]

dp = [False] * (x + 1)
dp[0] = True

for val in a:
  for j in range(x, val - 1, -1):
    if dp[j - val]:
      dp[j] = True

if dp[x]:
  print("yes")
else:
  print("no")