S = input()
l = len(S) - len(S.lstrip('a'))
r = len(S) - len(S.rstrip('a'))
T = "a" * (r - l) + S
flag = False

if l > r:
  flag = False
if l <= r and T == T[::-1]:
  flag = True

if flag:
  print('Yes')
else:
  print('No')

