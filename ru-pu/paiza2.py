N = int(input())
num_arrays1 = list(map(int, input().split()))
num_arrays2 = list(map(int, input().split()))

for i in range(N):
    print(num_arrays1[i] - num_arrays2[i])