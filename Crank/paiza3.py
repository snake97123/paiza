p, q, r = map(int, input().split())
ask1 = [0] * (p + 1)
ask2 = [0] * (q + 1)

for i in range(p):
    a,b = map(int, input().split())
    ask1[a] = b 

for j in range(q):
    a,b = map(int, input().split())
    if a in ask1:
      ask2[a] = b 

for key, value in enumerate(ask1):
    if key != 0:
        print(key, ask2[value])



