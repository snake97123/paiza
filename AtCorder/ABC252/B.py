N, K = map(int, input().split())
delicious_food_lists = list(map(int, input().split()))
hate_food_lists = list(map(int, input().split()))
flag = False
most_delicious_index = [i for i, x in enumerate(delicious_food_lists) if x == max(delicious_food_lists)]
# print(most_delicious_index)

for i in most_delicious_index:
  if i + 1 in hate_food_lists:
    flag = True

if flag:
  print('Yes')
else:
  print('No')