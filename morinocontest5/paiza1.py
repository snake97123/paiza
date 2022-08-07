n = int(input())

total_minutes = 0
total_seconds = 0

for i in range(n):
  minute, second = map(int, input().split())
  total_minutes += minute 
  total_seconds += second


seconds_to_minutes = total_seconds / 60
total_minutes += seconds_to_minutes
total_seconds = total_seconds % 60

if total_minutes < 74:
  print('Yes')
elif total_minutes == 74 and total_seconds == 0:
  print('Yes')
else:
  print('No') 