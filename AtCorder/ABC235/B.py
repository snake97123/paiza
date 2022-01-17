N = int(input())
hight_lists = list(map(int, input().split()))

now = hight_lists[0]

for i in range(1, N + 1):
  if hight_lists[i] > now and i != N+1:
    now = hight_lists[i]
  else:
    break
print(now)