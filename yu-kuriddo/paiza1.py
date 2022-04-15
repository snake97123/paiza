def extGCD(a,b):
    if b:
        d, y, x = extGCD(b, a % b)
        y -= (a // b)*x
        return d, x, y
    return a, 1, 0


a, b = map(int, input().split())
d,x,y = extGCD(a,b)
print(x, y)