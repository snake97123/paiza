g1, p1 = map(int, input().split())
g2, p2 = map(int, input().split())

if p1 / g1 >= p2 / g2:
    print(2)
else:
    print(1)