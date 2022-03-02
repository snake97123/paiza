N, M, K, L = map(int, input().split())

num_list = [list(map(int, input().split())) for _ in range(N)]

print(num_list[K-1][L-1])