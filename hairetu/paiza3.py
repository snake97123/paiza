N, M = map(int, input().split())
num_list = list(map(int, input().split()))

count = 0

for i in num_list:
    if i == N:
        count += 1
print(count)