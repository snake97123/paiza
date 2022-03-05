N, M = map(int, input().split())
A_list = list(map(int, input().split()))
B_list = list(map(int, input().split()))
flag = True

for i in B_list:
  if i in A_list:
    A_list.remove(i)
  else:
    flag = False
    break

if flag:
  print('Yes')
else:
  print('No')

