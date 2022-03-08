N, K, M = map(int, input().split())
count = 0

for i in range(N):
    point = int(input())
    if point >= K:
        count += 1

if count - M < 0:
    print(0)
else:
    print(count - M)