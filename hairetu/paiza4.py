n, m = map(int, input().split())
str_list = list(map(str,input().split()))

str_list.sort()
print(str_list[m - 1])