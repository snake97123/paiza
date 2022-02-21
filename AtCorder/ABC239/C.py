# 距離が√５になるのは求める点からx軸y軸ともにプラスマイナス２の範囲内なのでその中で検索を行えばよい。

x1, y1, x2, y2 = map(int, input().split())
flag = False
for dx in range(-2, 3):
  for dy in range(-2, 3):
    xt = x1 + dx
    yt = y1 + dy
    if (xt - x1) ** 2 + (yt - y1) ** 2 == 5 and (xt - x2) ** 2 + (yt - y2) ** 2 == 5:
      flag = True

if flag:
  print("Yes")
else:
  print("No")