import Foundation

let n = Int(readLine()!)!
let numbersArray = readLine()!.components(separatedBy: " ")
let targetNumber = Int(readLine()!)!

for i in 0..<numbersArray.count {
    if Int(numbersArray[i])! == targetNumber {
        print(i + 1)
    }
}