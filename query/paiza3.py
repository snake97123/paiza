N, K = map(int, input().split())
name_list = []
for i in range(N):
    name = input()
    name_list.append(name)

for i in range(K):
    event = input()
    if event == 'handshake':
        new_name_list = sorted(name_list)
        for j in new_name_list:
            print(j)
    else:
        event1, name1 = event.split(" ")
        if event1 == 'join':
            name_list.append(name1)
        if event1 == 'leave':
            name_list.remove(name1)