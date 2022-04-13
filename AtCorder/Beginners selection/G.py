N = int(input())
moti_lists = []
for i in range(N):
  d = int(input())
  moti_lists.append(d)

moti_lists.sort()
moti_lists.reverse()

new_moti_lists = list(set(moti_lists))

print(len(new_moti_lists))