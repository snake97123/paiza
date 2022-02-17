a, b, c, d = map(int, input().split())
result = (((a + b) * c) ** 2) % d
print(result)