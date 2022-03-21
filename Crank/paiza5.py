n = int(input())

for i in range(n):
    a,b,c = map(str, input().split())
    d,f = a.split(":")

    hour = int(d) + int(b) 
    minute = int(c) + int(f) 
    
    if minute >= 60:
        minute -= 60
        hour += 1
    
    if hour >= 24:
        hour -= 24
    
    if len(str(hour)) == 1:
        hour = "0" + str(hour)
    if len(str(minute)) == 1:
        minute = "0" + str(minute)
        
    print(str(hour) + ":" + str(minute))