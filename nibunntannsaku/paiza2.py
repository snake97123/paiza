n, k = map(int, input().split())
a = list(map(int, input().split()))

left = 0.0
right = 10001.0

for i in range(100):
    mid = (left + right) / 2
    num_of_pipes = 0
    for i in a:
        if i // mid >= 1:
            num_of_pipes += i // mid
    
    if num_of_pipes < k:
        right = mid
    else:
        left = mid

print(mid)