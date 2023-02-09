N, M = map(int, input().split())
name_list = input().split(" ")
interrupt_name_list = input().split(" ")
index_list = list(map(int, input().split()))

for i in range(M):
  name_list.insert(index_list[i] - 1, interrupt_name_list[i])

for name in name_list:
    print(name)