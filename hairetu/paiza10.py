pin = []
aim_pin_number = 1
remain_pin_counts = 0

for i in range(4):
  pin += list(map(int, input().split()))

remain_pin_counts = pin.count(1)
for j in range(9, -1, -1):
  if pin[j] == 0:
    aim_pin_number += 1
  else:
    break
            
print(aim_pin_number)
print(remain_pin_counts)

