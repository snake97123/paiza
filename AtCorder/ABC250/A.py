# 入力値の取得
H, W = map(int, input().split())
R, C = map(int, input().split())

# 隣接する個数の計算
count = 0
if R + 1 <= H:
  count += 1
if R - 1 > 0:
  count += 1
if C + 1 <= W:
  count += 1
if C - 1 > 0:
  count += 1

print(count)