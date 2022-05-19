N = int(input())
adjacent_list = [ [] for i in range(N)]
# print(adjacent_list)
for i in range(N - 1):
  a, b = map(int, input().split())
  adjacent_list[a - 1].append(b)
  adjacent_list[b - 1].append(a)

index = 1
for i in adjacent_list:
  if len(i) == 1:
    print(index)
  index += 1

