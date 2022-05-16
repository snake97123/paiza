N = int(input())
# poem_list = []
# point_list = []
submitted_list = []
max_point = 0
ans = 0

for i in range(N):
  poem, point = map(str, input().split())
  if poem in submitted_list:
    continue
  
  else:
    submitted_list.append(poem)
    if int(point) > max_point:
      max_point = int(point) 
      ans = i + 1
      # poem_list.append(poem)
      # point_list.append(point)
print(ans)

