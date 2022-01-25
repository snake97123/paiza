n = int(input());

a_list = [1] * 41
for i in range(3,41):
    a_list[i] = a_list[i-1] + a_list[i-2]

for _ in range(n):
    index = int(input())
    print(a_list[index])
    