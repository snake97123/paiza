S = input()

count = 0
if len(S) == len(set(S)):
  count += 1
if not S.islower():
  count += 1
if not S.isupper():
  count += 1


if count == 3:
  print('Yes')
else:
  print('No')