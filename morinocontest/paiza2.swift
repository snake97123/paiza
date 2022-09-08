let workHour=Int(readLine()!)!
var breakTime = 0

if workHour >= 9 {
    breakTime = 60 
} else if workHour > 6 && workHour < 9 {
    breakTime = 45
} else {
    breakTime = 0
}

if breakTime != 0 {
    print("\(breakTime) min")
} else {
    print("no break")
}