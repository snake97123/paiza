s = input()
try:
    int(s, 10)
except ValueError:
    print('NO')
else:
    print('YES')