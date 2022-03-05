n = int(input())
weight = list(map(int, input().split()))

max_point = 0

for i in range(n):
    point_list = list(map(int, input().split()))
    sum = 0
    for j in range(5):
        sum += point_list[j] * weight[j]
        max_point = max(sum, max_point)

print(max_point)