x, y, z = map(int, input().split())
for i in range(x, x + y):
    if(i >= x and i % y == z):
        print(i)
        break