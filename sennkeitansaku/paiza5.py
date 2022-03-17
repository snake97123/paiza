n = int(input())
name_dict = {}
for i in range(n):
    name, point = map(str, input().split())
    name_dict[name] = point

k, l = map(int, input().split())

for name, point in name_dict.items():
    if k <= int(point) <= l:
        print(name)