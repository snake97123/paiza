n, k, p = map(int, input().split())
height_lists = [int(input()) for i in range(n)]
height_lists.append(p)
for i in range(k):
    inputs = input().split()
    
    if inputs[0] == 'join':
        join_height = int(inputs[1])
        height_lists.append(join_height)
    else:
        height_lists.sort()
        print(height_lists.index(p) + 1)