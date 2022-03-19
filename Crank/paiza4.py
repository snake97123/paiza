N, M, K = map(int, input().split())
points = []

for i in range(N):
    point = 0
    select_num = list(map(int, input().split()))
    for j in select_num:
        if j == K:
            point += 1
    points.append(point)
    
for i in points:
    print(i)
