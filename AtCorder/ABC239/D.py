a,b,c,d = map(int, input().split())
flag = False
for i in range(a, b+1):
  for j in range(c, d+1):
    k = i + j
    for h in range(2, k):
      if k % h == 0:
        flag = False
        break
      else:
        flag = True
if flag:
  print("Aoki")
else:
  print("Takahashi") 