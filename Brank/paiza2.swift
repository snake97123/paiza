import Foundation

let n = Int(readLine()!)!
var sum = 0

for _ in 0..<n {
    let numbers = readLine()!.components(separatedBy: " ")
    let number1 = Int(numbers[0])!
    let number2 = Int(numbers[1])!
    
    if number1 != number2 {
        sum += number1 + number2
    } else {
        sum += number1 * number2
    }
}

print(sum)