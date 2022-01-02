h, w = map(int, input().split())
map_list = [list(map(int, input().split())) for i in range(h)]
quene = [[0,0]]
visited = [[0 for i in range(w)] for i in range(h)]

for i in range(h):
  for j in range(w):
    if map_list[i][j] == 1:
      map_list[i][j] = '#'
visited[0][0] = 1

dy_dx = [[1,0], [0,1], [-1,0], [0, -1]]

while len(quene) > 0:
  now = quene.pop(0)
  for k in range(4):
    y = now[0] + dy_dx[k][0]
    x = now[1] + dy_dx[k][1]
    if 0 <= y < h and 0 <= x < w:
      if map_list[y][x] != '#' and visited[y][x] == 0:
        visited[y][x] = visited[now[0]][now[1]] + 1
        quene.append([y,x])

print(visited[h - 1][w - 1])

