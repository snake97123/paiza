
A, B, C, D, E, F, X = map(int, input().split())
Takahashi = X // (A + C)
Aoki = X // (D + F) 
# print(T, A)

t = X % (A + C)
a = X % (D + F)

if t > A:
  T_dis = (Takahashi + 1) * A * B
else:
  T_dis = (A * Takahashi + t) * B

if a > D:
  A_dis = (Aoki + 1) * D * E
else:
  A_dis = (D * Aoki + a) * E

if T_dis > A_dis:
  print('Takahashi')
elif A_dis > T_dis:
  print('Aoki')
else:
  print('Draw')