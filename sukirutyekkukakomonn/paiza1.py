n,k = map(int, input().split())
candidate_date = list(map(int, input().split()))
peoples = []
# print(candidate_date[1])
for i in range(n - 1):
    sum = candidate_date[i] + candidate_date[i + 1]
    peoples.append(sum)

max = max(peoples)
counts = peoples.count(max)
index = peoples.index(max)

print(index, counts)