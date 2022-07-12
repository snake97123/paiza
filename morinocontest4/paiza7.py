x = int(input())
zoro_arrays = [11, 22, 33, 44, 55, 66, 77, 88, 99]
for i in range(len(zoro_arrays)):
  if zoro_arrays[i] <= x < zoro_arrays[i + 1]:
    print(zoro_arrays[i + 1])
    break

