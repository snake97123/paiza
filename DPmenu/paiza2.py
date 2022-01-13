x, d = map(int, input().split())

num_arrays = [0] * (1001)

for i in range(1000):
    if i == 0:
        num_arrays[i] = x
    else:
        num_arrays[i] = num_arrays[i-1] + d
Q = int(input())
for _ in range(Q):
    j = int(input())
    print(num_arrays[j - 1])