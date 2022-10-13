import Foundation
let inputs = readLine()!.components(separatedBy: " ")
let ining = Int(inputs[0])!
let maxPitchingNumber = Int(inputs[1])!
var sumPitchingNumber = 0

for _ in 0..<ining {
   let iningPitchingNumber = Int(readLine()!)!
    sumPitchingNumber += iningPitchingNumber 
}

if sumPitchingNumber >= maxPitchingNumber {
    print("No")
} else {
    print("Yes")
}