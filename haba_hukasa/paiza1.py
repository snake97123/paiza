h, w = map(int, input().split())
x, y = map(int, input().split())

maps = [list("." * w) for i in range(h)]
maps[x][y] = "*"
if x + 1 < h:
  maps[x + 1][y] = "*"
if y + 1 < w:
  maps[x][y + 1] = "*"
if x - 1 >= 0:
  maps[x - 1][y] = "*"
if y - 1 >= 0:
  maps[x][y - 1] = "*"

for i in maps:
    print(*i, sep='')