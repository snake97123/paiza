
n, k = map(int, input().split())
visitor_list = list(map(int, input().split()))
sum_visitor_list = []

sum_visit = sum(visitor_list[:k])
max_visit = sum_visit
sum_visitor_list.append(sum_visit)
count = 1

for i in range(1, n - k + 1):
    sum_visit = sum_visit - visitor_list[i - 1] + visitor_list[i + k - 1]
    sum_visitor_list.append(sum_visit)

    if sum_visit > max_visit:
        max_visit = sum_visit
        count = 1
    elif sum_visit == max_visit:
        count += 1

result = sum_visitor_list.index(max_visit) + 1
print(count, result)