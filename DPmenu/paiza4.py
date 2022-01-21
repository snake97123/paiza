x, d_1, d_2 = map(int, input().split())
q = int(input())
a_list = [0] * (1001)
a_list[1] = x  

for i in range(2, 1001):
    if i % 2 == 0:
        val = a_list[i - 1] + d_2
        a_list[i] = val
    if i % 2 != 0:
        val = a_list[i - 1] + d_1
        a_list[i] = val

for j in range(q):
    index = int(input())
    print(a_list[index])