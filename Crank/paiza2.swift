import Foundation

let n = Int(readLine()!)!
for _ in 0..<n {
let inputInformation =  readLine()!.components(separatedBy: " ")
let time = inputInformation[0].components(separatedBy: ":")
let nowHour = Int(time[0])!
let nowMinute = Int(time[1])!
let passHour = Int(inputInformation[1])!
let passMinute = Int(inputInformation[2])!

var ansHour = nowHour + passHour
var ansMinute = nowMinute + passMinute

if ansMinute >= 60 {
    ansHour += 1
    ansMinute -= 60 
}

if ansHour >= 24 {
    ansHour -= 24
}
var carryingAnsHour = String(ansHour)
var carryingAnsMinutes = String(ansMinute)

if carryingAnsHour.count == 1 {
    carryingAnsHour = "0" + carryingAnsHour
}
if carryingAnsMinutes.count == 1 {
    carryingAnsMinutes = "0" + carryingAnsMinutes
}

print("\(carryingAnsHour):\(carryingAnsMinutes)")
}