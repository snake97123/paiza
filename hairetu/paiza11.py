n, q = map(int, input().split())
lst = list(range(1, n + 1))

for i in range(q):
    order = input().split()
    if order[0] == 'swap':
        a = int(order[1])
        b = int(order[2])
        lst[a-1], lst[b-1] = lst[b-1], lst[a-1]
    elif order[0] == 'reverse':
        lst.reverse()
    else:
        a = int(order[1])
        if a <= len(lst):
            lst = lst[:a]
for i in lst:
    print(i)