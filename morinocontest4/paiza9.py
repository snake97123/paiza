import math

n, k, g = map(int, input().split())
ans = (g / k) * n
print(math.floor(ans))