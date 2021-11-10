a,b = map(int, input().split())


def GCD(a,b):
    if b == 0:
        return a
    return GCD(b, a%b)
    
result = GCD(a,b)
print(result)