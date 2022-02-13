h, w, r, c = map(int, input().split())
maps = [list(input()) for w in range(h)]

if maps[r - 1][c - 1] == '.':
    print('No')
else:
    print('Yes')
