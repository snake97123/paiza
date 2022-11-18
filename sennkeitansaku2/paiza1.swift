import Foundation 

let n = Int(readLine()!)!
let numbers = readLine()!.components(separatedBy: " ")
var count = 0

for i in 0..<n - 1 {
    if numbers[i] == numbers[i + 1] {
        count += 1
    }
}

print(count)