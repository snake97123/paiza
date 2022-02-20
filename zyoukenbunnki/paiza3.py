a,b = map(int, input().split())
min = 10000000000000
for i in range(a, b+1):
    for j in range(a, b+1):
        if i*j <= min:
            min = i*j

print(min)