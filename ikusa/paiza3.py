n = int(input())
is_customer = []
for i in range(n):
    customer = input()
    if customer in is_customer:
        print("NO")
    else:
        print("YES")
        is_customer.append(customer)