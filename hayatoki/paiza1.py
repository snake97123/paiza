n, m = map(int, input().split())
result = n * 1000 * 100 / m 
if result >= 10000:
    print('yes')
else:
    print('no')