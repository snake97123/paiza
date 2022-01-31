n = int(input())
trees_list = [int(input()) for i in range(n)]

def minimum_decrease_segment(arrays):
  dp = [1] * n 
  for i in range(1,n):
      for j in range(0,i):
          if trees_list[j] > trees_list[i]:
              dp[i] = max(dp[i], dp[j] + 1)
  return max(dp)


result = minimum_decrease_segment(trees_list)
print(result)
            


