item_price = int(input())
pay_price = int(input())

if pay_price >= item_price:
    print(pay_price - item_price)
else:
    print("Tarimasen!")
