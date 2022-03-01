N = int(input())
sum = 1
count = 0
for i in range(1,N+1):
    sum = sum * i;
    
sum_list = list(reversed(str(sum)))

for j in sum_list:
    if j == "0":
        count += 1
    else:
        break

print(count)