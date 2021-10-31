x,y,n = map(int, input().split())
direction = "N"

for _ in range(n):
    lr = input()
    if(direction == "N" and lr == "L"):
        x -= 1
        direction = "W"
    elif(direction == "N" and lr == "R"):
        x += 1
        direction = "E"
    elif(direction == "W" and lr == "L"):
        y += 1
        direction = "S"
    elif(direction == "W" and lr == "R"):
        y -= 1
        direction = "N"
    elif(direction == "S" and lr == "L"):
        x += 1
        direction = "E"
    elif(direction == "S" and lr == "R"):
        x -= 1
        direction = "W"
    elif(direction == "E" and lr == "L"):
        y -= 1
        direction = "N"
    elif(direction == "E" and lr == "R"):
        y += 1
        direction = "S"
    
        
    print(x,y)