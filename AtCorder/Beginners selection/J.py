N = int(input())
Flag = True
t_cnt, x_cnt, y_cnt = 0, 0, 0
for i in range(N):
  t, x, y = map(int, input().split())

  #奇数のとき
  if t % 2 != 0:
    if (x + y) % 2 == 0 or abs((x_cnt - x) + (y_cnt - y)) > t - t_cnt:
      Flag = False
    else:
      t_cnt = t
      x_cnt = x
      y_cnt = y
  #偶数のとき
  if t % 2 == 0:
    if (x + y) % 2 != 0 or abs((x_cnt - x) + (y_cnt - y)) > t - t_cnt:
      Flag = False
    else:
      t_cnt = t
      x_cnt = x
      y_cnt = y

if Flag:
  print("Yes")
else:
  print("No")


