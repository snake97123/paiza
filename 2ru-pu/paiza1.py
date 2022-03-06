N = int(input())
sum = 1
count = 0

for i in range(1, N + 1):
    sum *= i 

while sum % 2 == 0:
    sum //= 2
    count += 1

print(count)