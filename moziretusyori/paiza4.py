n = int(input())

list_a = list(map(int, input().split()))
list_b = list(map(int, input().split()))

list_a.extend(list_b)
merge_list = set(list_a)
ans = sorted(merge_list)
print(*ans)
