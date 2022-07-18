n = int(input())
num_list = [ int(input()) for _ in range(n)]
selected = []
ans_array = []
count = 0

for i in range(0, 1 << n):
  partsum = 0
  selected = []
  for j in range(0, n):
    if (i & (1 << j)) != 0:
      partsum += num_list[j]
      selected.append(num_list[j])
  if partsum == 777:
    count += 1
    ans_array = selected
  
    
   

if count == 0:
  print('no answer')
elif(count == 1):
  ans_array.sort()
  print(*ans_array)
else:
  print('multiple answers')


