n = int(input())
zero_flag = False

for i in range(n):
    num = int(input())
    if num == 0:
        zero_flag =True
if zero_flag:
    print("NO")
else:
    print("YES")