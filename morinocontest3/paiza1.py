
n = int(input())
flag = False

for i in range(n):
    a = input().split()
    if a[0] == 'shift' and flag == False:
        print(a[1].upper(), end="")
    elif a[0] == 'shift' and flag == True:
        print(a[1].lower(), end="")
    elif a[0] == 'capslock' and flag == False:
        flag = True
    elif a[0] == 'capslock' and flag == True:
        flag = False
    else:
        if flag == False:
            print(a[0], end="")
        else:
            print(a[0].upper(), end="")
        