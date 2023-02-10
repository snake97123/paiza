N, Q = map(int, input().split())
ball_cup_arrays = [0] * (3000)
# print(ball_cup_arrays)
ball_cup_arrays[0] = 1
for i in range(Q):
  orders = list(map(int, input().split()))

  if orders[0] == 1:
    ball_cup_arrays[orders[2] - 1], ball_cup_arrays[orders[1] - 1] = ball_cup_arrays[orders[1] - 1], ball_cup_arrays[orders[2] - 1]
  elif orders[0] == 2:
    ball_cup_arrays.insert(orders[2], 0)

index = ball_cup_arrays.index(1)
print(index + 1)
