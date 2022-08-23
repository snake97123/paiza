R, C = map(int, input().split())
k = max(abs(R - 8), (C - 8))
if k % 2 == 0:
  print('white')
else:
  print('black')
