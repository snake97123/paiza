temperature_list = [int(input()) for _ in range(10)]
flag = False
for i in range(9):
    if abs(temperature_list[i + 1] - temperature_list[i]) >= 3:
        flag = True
        break

if flag:
    print('Yes')
else:
    print('No')