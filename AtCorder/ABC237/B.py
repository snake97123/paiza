

H, W = map(int, input().split())
a = [list(map(int, input().split())) for i in range(H)]

for x in zip(*a):
  print(*x)

