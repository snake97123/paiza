import Foundation

let firstLine = readLine()!.split(separator: " ").map { Int($0)! }
let N = firstLine[0]
let M = firstLine[1]
var A: [Int] = readLine()!.split(separator: " ").map { Int($0)! }
let Q: [Int] = readLine()!.split(separator: " ").map { Int($0)! }

for number in Q {
    A = A.filter { $0 % number != 0 }
}

if A.count == 0 {
    print("You")
} else {
    print("Kyoko")
    let stringRepresentation = A.map { String($0) }.joined(separator: " ")

    print(stringRepresentation) 
}