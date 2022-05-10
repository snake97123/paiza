# 入力値の取得
N, A, B = map(int, input().split())

block = [".", "#"]
now = 0
pre = 0

for i in range(N):
  for j in range(A):
    now = pre
    for k in range(N):
      for l in range(B):
        print(block[now], end = "")
      if now == 0:
        now = 1
      else:
        now = 0
    print() 
  if pre == 1:
    pre = 0
  else:
    pre = 1
