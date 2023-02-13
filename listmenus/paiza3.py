N, Q = map(int, input().split())
A = list(map(int, input().split()))
B = list(map(int, input().split()))
for number in B:
    A = [ x for x in A if x % number != 0]

if len(A) == 0:
    print("You")
else:
    print("Kyoko")
    print(*A)