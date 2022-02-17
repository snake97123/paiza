n = 10000
a, b = map(int, input().split())
n = int(n / a) 
n = n % b 
print(n)