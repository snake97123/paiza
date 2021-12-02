H,W,N = map(int, input().split())

card_boards = list(input().split() for _ in range(H))

# print(card_boards)

L = int(input())

result = [0] * N

player = 0

for i in range(L):
  a,b,A,B = map(int, input().split())
  if card_boards[a - 1][b - 1] == card_boards[A - 1][B - 1]:
    result[player] += 2
  else:
    player = (player + 1) % N

for i in range(N):
  print(result[i])