value = [0] * 1024
next_ptr = [0] * 1024

empty_min_idx = 1
back = 0 
start_ptr = 0
end_ptr = 1023

n = int(input())

value[start_ptr] = value[end_ptr]  = -1
next_ptr[start_ptr] = end_ptr 
next_ptr[end_ptr] = -1

for i in range(n):
  value[i] = int(input())

for i in range(n):
  print(value[i])