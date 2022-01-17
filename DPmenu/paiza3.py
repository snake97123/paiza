x, d_1, d_2, k = map(int, input().split())
sum_array = [0] * (k + 1)
sum_array[1] = x


for i in range(2, k+1):
    if i % 2 == 0:
        sum_array[i] = sum_array[i - 1] + d_2
    else:
        sum_array[i] = sum_array[i - 1] + d_1

print(sum_array[-1])
        