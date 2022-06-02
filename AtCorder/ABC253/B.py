H, W = map(int, input().split())
piece_x = []
piece_y = []


for i in range(H):
  tmp = list(input())
  for j in range(W):
    if tmp[j] == 'o':
      piece_x.append(i)
      piece_y.append(j)

x_move_distance = abs(piece_x[0] - piece_x[1])
y_move_distance = abs(piece_y[0] - piece_y[1])

ans = x_move_distance + y_move_distance
print(ans)
