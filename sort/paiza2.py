n = int(input())
a = list(map(int, input().split()))

for i in range(n-1):
    min = i 
    for j in range(i + 1, n):
        if a[min] > a[j]:
            min = j
             
    a[min], a[i] = a[i], a[min]
    print(*a)   

    