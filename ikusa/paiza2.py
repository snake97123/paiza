n = int(input())
odd_arrays = []
for i in range(n):
  tmp = int(input())
  if tmp % 2 != 0:
    odd_arrays.append(tmp)

odd_arrays = sorted(odd_arrays)
for i in odd_arrays:
    print(i)