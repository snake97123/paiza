import Foundation

let n = Int(readLine()!)!
let numberArray = readLine()!.components(separatedBy: " ")

var max = -1000000000
var secondMax = -1000000000

for i in 0..<n {
    let number = Int(numberArray[i])!
    if number > secondMax && number > max {
        secondMax = max
        max = number 
    } else if number > secondMax && number <= max {
        secondMax = number 
    } 
}

print(secondMax)

