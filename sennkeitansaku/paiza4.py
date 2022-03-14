n = int(input())
num_list = list(map(int, input().split()))
k = int(input())

num_list.sort()
print(num_list[-k])