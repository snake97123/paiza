import Foundation

let musicCount = Int(readLine()!)!
var flag = true
var totalSecounds = 0
var totalMinutes = 0

for _ in 0..<musicCount {
    let duration = readLine()!.components(separatedBy: " ")
    let minute = Int(duration[0])!
    let second = Int(duration[1])!
    totalMinutes += minute
    totalSecounds += second
    if totalSecounds >= 60 {
        totalMinutes += 1
        totalSecounds -= 60
    }
    
    if totalMinutes > 74 {
        flag = false
        break
    }
}

if flag == true {
    print("Yes")
} else {
    print("No")
}