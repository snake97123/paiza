N, K = map(int,input().split())
adjacent_list = [ [] for i in range(N)]
# print(adjacent_list)
for i in range(N - 1):
  a, b = map(int, input().split())
  adjacent_list[a - 1].append(b)
  adjacent_list[b - 1].append(a)

for i in range(K):
  c, d = map(int, input().split())
  if d in adjacent_list[c - 1]:
    print('YES')
  else:
    print('NO')