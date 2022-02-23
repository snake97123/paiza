N = int(input())
nums = list(map(int, input().split()))
count = 0
exist_lists = []

for i in nums:
  if i in exist_lists:
    continue
  else:
    count += 1
    exist_lists.append(i)

print(count)
