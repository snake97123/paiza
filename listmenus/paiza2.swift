import Foundation

let inputInformation = readLine()!.components(separatedBy: " ")
let N = Int(inputInformation[0])!
let Q = Int(inputInformation[1])!

var ballInCupArrays = Array<Int>(repeating:0, count: N + 1)
ballInCupArrays[0] = 1

for _ in 0..<Q {
    let orderInformation = readLine()!.split(separator: " ").map{ Int(String($0))! }
    let order = orderInformation[0]
    let X = orderInformation[1]
    let Y = orderInformation[2]
    if order == 1 {
        let temp = ballInCupArrays[X - 1]
        ballInCupArrays[X - 1] = ballInCupArrays[Y - 1]
        ballInCupArrays[Y - 1] = temp
    }
    if order == 2 {
        ballInCupArrays.insert(0, at: X)
    }
}

let answer = ballInCupArrays.firstIndex(of: 1)
print(answer! + 1)