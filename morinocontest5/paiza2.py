n, m = map(int, input().split())
batting_average = m / n 
if batting_average >= 0.3:
    print('Yes')
else:
    print('No')