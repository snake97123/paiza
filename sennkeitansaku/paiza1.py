n = int(input())
a = list(map(int, input().split()))
k = int(input())


for i in range(len(a)):
    if k == a[i]:
        print(i + 1)
    