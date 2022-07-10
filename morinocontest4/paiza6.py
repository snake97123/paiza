p = int(input())

count = 0
count += p // 500
p %= 500
count += p // 100
p %= 100
count += p // 50
p %= 50
count += p // 10
p %= 10
count += p // 5
p %= 5
count += p // 1

print(count)
