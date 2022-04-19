s = list(input())
number_list = [ False ] * 10

for i in s:
  i = int(i)
  number_list[i] = True

for i in range(10):
  if number_list[i] == False:
    print(i)

