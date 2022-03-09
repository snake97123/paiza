n = int(input())
A = []

for i in range(n):
    order = list(input().split())
    if order[0] == 'in':
        A.append(order[1])
    elif order[0] == 'out':
        if len(A) != 0:
            A.pop(0)

for j in A:
    print(j)

    