n = int(input())
height_lists = [int(input()) for i in range(n)]
min_height_difference = 10000
a = 0
b = 0

for i in range(n):
    for j in range(i+1, n):
        height_difference = abs(height_lists[i] - height_lists[j])
        if height_difference < min_height_difference:
            min_height_difference = height_difference
            a = i
            b = j
selected_heights = [height_lists[a], height_lists[b]]
selected_heights.sort()
for i in selected_heights:
  print(i)