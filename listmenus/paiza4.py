Q = int(input())
dumbbell_weight_list = []

for i in range(Q):
  order = input().split()
  if order[0] == "ADD_RIGHT":
    weight = int(order[1])
    dumbbell_weight_list.append(weight)
  elif order[0] == "ADD_LEFT":
    weight = int(order[1])
    dumbbell_weight_list.insert(0, weight)
  elif order[0] == "REMOVE_RIGHT":
    dumbbell_weight_list.pop(-1)
  elif order[0] == "REMOVE_LEFT":
    dumbbell_weight_list.pop(0)

weight_sum = sum(dumbbell_weight_list)
print(weight_sum)