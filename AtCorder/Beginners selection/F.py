N = int(input())
Alice_points = 0
Bob_points = 0

card_list = list(map(int, input().split()))
card_list.sort()
card_list.reverse()
# print(card_list)

for i in range(len(card_list)):
    if i % 2 == 0:
       Alice_points += card_list[i]
    else: 
        Bob_points += card_list[i]

print(Alice_points - Bob_points)
