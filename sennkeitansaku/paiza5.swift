import Foundation

let n = Int(readLine()!)!
let numberArray = readLine()!.components(separatedBy: " ")
let k = Int(readLine()!)!
var newNumberArray: [Int] = []

for i in numberArray {
    let intNumber = Int(i)!
    newNumberArray.append(intNumber)
}

newNumberArray.sort { $1 < $0 }
print(newNumberArray[k - 1])