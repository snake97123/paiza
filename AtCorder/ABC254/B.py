N = int(input())
number_array = [[] for i in range(N)]
number_array[0] = [1]


for i in range(1,N):
  for j in range(i + 1):
    if j == 0 or i == j:
      number_array[i].append(1)
    else:
      tmp_number = number_array[i - 1][j - 1] + number_array[i - 1][j]
      number_array[i].append(tmp_number)

for i in number_array:
  print(*i)


      
