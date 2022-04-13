N, A, B = map(int, input().split())
ans = 0
# Nの各桁を配列に格納する。
for i in range(1, N + 1):
  N_list = list(map(int, str(i)))
  # print(N_list)
  # 各桁を合計する。
  sum = 0
  for j in N_list:
      sum += j

  # A以上B以下であれば足す。
  if A <= sum and sum <= B:
      ans += i

print(ans)