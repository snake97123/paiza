import Foundation

let n = Int(readLine()!)!
let numbers = readLine()!.components(separatedBy: " ")
var maxSum = -400
var maxIndex = 0

for i in 0...n - 3 {
    let number1 = Int(numbers[i])!
    let number2 = Int(numbers[i + 1])!
    let number3 = Int(numbers[i + 2])!
    
    let sum = number1 + number2 + number3
    if sum > maxSum {
        maxSum = sum 
        maxIndex = i
    }
}

print(maxIndex + 1)