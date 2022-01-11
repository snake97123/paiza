x, d, k = map(int, input().split())
a_list = [0] * k
a_list[0] = x
for i in range(1,k):
    a_list[i] += a_list[i - 1] + d

print(a_list[k - 1])