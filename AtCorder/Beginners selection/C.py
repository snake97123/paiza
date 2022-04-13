N = int(input())
numbers = list(map(int, input().split()))
# print(numbers)
count = 0

flag = True
while flag:
  for i in range(len(numbers)):
    if numbers[i] % 2 == 0:
      numbers[i] = numbers[i] / 2
    else:
      flag = False
      break
  count += 1

print(count - 1)