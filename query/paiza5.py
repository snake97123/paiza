N, K = map(int, input().split())

data = {}
for i in range(N):
    company1, password1, money1 = input().split()
    data[company1] = (password1, money1)
    
for i in range(K):
    company2, password2, money2 = input().split()
    
    pin, save = data[company2]
    
    if password2 != pin: 
        continue
    else:
        data[company2] = (pin, int(save) - int(money2))

for a, b in data.items():
    print(a, b[1])
    