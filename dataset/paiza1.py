def do_query(query):
    if query[0] == 0:
        a.append(query[1])
    elif query[0] == 1:
        a.pop(-1)
    else:
        print(*a)

n, q = map(int, input().split())
a = list(map(int, input().split()))
for i in range(q):
    query = list(map(int, input().split()))
    do_query(query)