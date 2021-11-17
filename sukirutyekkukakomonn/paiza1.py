n,k = map(int, input().split())
candidate_date = list(map(int, input().split()))
peoples = []
max_num = []
# print(candidate_date[1])
for i in range(n - k + 1):
    candidate_date_avg = sum(candidate_date[i:i + k])/k
    peoples.append(candidate_date_avg)

for i, x in enumerate(peoples):
    if x == max(peoples):
        max_num.append(i)
        
print(len(max_num), max_num[0] + 1)