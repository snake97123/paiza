current_floor, next_move_floor = map(str, input().split())
if current_floor[0] >= next_move_floor[0]:
    print('down')
else:
    print('up')