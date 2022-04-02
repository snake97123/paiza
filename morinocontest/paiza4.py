n = int(input())
count = 0
sum_price = 0

for i in range(n):
    item, price = input().split()
    if item == 'pants':
        count += 1
    sum_price += int(price)

if count >= 1 and sum_price >= 2000:
    sum_price -= 500


print(sum_price)