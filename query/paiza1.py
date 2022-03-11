n, k = map(int, input().split())
num_arrays = [int(input()) for _ in range(n)] 

for i in range(k):
    s = input()
    if s == 'pop' and len(num_arrays) >= 1:
        num_arrays.pop(0)
    if s == 'show' and len(num_arrays) >=1:
        for j in num_arrays:
            print(j)
            
        