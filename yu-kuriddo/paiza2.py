def gcd(a,b):
    while True:
        if a == 0:
            return b 
        if b == 0:
            return a 
        if a >= b:
            a = a % b 
        else:
            b = b % a

a, b = map(int, input().split())
ans = gcd(a,b)
print(ans)