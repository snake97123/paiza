N = int(input())
adjacent_list = [ [] for i in range(N)]
# print(adjacent_list)
for i in range(N - 1):
  a, b = map(int, input().split())
  adjacent_list[a - 1].append(b)
  adjacent_list[b - 1].append(a)

for i in range(N):
  if len(adjacent_list[i]) == 1:
    print(i + 1)


