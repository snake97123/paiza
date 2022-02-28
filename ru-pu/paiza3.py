n = int(input())

num_lists = list(map(int, input().split()))
count = 0

for i in num_lists:
    if i == 1:
        count += 1

print(count)