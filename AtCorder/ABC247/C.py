N = int(input())
S = [[], [1]]
for i in range(2, N + 1):
    S.append(S[i - 1] + [i] + S[i - 1])
print(*S[N])


