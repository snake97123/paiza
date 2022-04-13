N,Y = map(int, input().split())

x10000 = -1
x5000 = -1
x1000 = -1

for i in range(N + 1):
  for j in range(N + 1):
    k = N - i - j
    if 10000 * i + 5000 * j + 1000 * k == Y and i >=0 and j >= 0 and k >= 0:
      x10000 = i
      x5000 = j
      x1000 = k
      break

print(x10000, x5000, x1000)