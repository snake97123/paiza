a, b = map(int, input().split())

if a == 1:
  if b == 10 or b == a + 1:
    print("Yes")
else:
  if b == a + 1:
    print("Yes")
  else:
    print("No")
