# Atcoder Dungeon1
N = int(input())
A = list(map(int, input().split()))
B = list(map(int, input().split()))

move_time = [ None ] * N
for i in range(N):
    if i == 0:
        move_time[i] = 0
    elif i == 1:
        move_time[i] = A[i - 1]
    else:
        move_time[i] = min(move_time[i - 1] + A[i - 1], move_time[i - 2] + B[i - 2])

print(move_time[-1])