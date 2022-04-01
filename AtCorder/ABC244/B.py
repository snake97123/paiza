n = int(input())
order = input()
x = 0
y = 0
direction = "E"

for i in range(n):
  if order[i] == "S":
    if direction == "E":
      x += 1
    elif direction == "N":
      y += 1
    elif direction == "W":
      x -= 1
    elif direction == "S":
      y -= 1
  
  if order[i] == "R":
    if direction == "E":
      direction = "S"
    elif direction == "N":
      direction = "E"
    elif direction == "W":
      direction = "N"
    elif direction == "S":
      direction = "W"

print(x, y) 