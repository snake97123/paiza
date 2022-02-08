n = int(input())
a = list(map(int, input().split()))
k = int(input())
h = list(map(int, input().split()))

def insertion_sort(a, n, h):
    num_of_move = 0
    for i in range(h, n):
        tmp = a[i]
        j = i - h
        while j >= 0 and a[j] > tmp:
            a[j + h] = a[j]
            j -= h
            num_of_move += 1
        a[j + h] = tmp
    print(num_of_move)
    return a


def shell_sort(a, n, h, k):
    for i in range(k):
        if(i == 0):
            d = insertion_sort(a, n, h[i])
        else:
            d = insertion_sort(a, n, h[i])

shell_sort(a, n, h, k)