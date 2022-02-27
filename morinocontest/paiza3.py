n = int(input())
d = {}
for i in range(n):
    a,b = map(str, input().split())
    d[b] = int(a) 

d_sorted = sorted(d.items(), key=lambda x:x[1])

for i, j in d_sorted:
    print(j, i)