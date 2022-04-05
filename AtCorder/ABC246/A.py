X = []
Y = []
x1 = 0
y1 = 0
for i in range(3):
  x, y = map(int, input().split())
  X.append(x)
  Y.append(y)

for i in range(3):
  if X.count(X[i]) == 1:
    x1 = X[i]
  if Y.count(Y[i]) == 1:
    y1 = Y[i]

print(x1, y1)
