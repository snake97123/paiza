N = int(input())
Q = int(input())
password = ['A'] * N

for i in range(Q):
    a, b = input().split()
    a = int(a)
    password[a - 1] = b

C = input()

for i in range(N):
    if password[i] == 'A':
        password[i] = C

print(*password, sep='')