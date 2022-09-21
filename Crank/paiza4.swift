import Foundation

let inputInformation = readLine()!.components(separatedBy: " ")
let participant = Int(inputInformation[0])!
let numberOfResponses = Int(inputInformation[1])!
let answerNumber = Int(inputInformation[2])!

for _ in 0..<participant {
    var points = 0
    let numbers = readLine()!.components(separatedBy: " ")
    for j in 0..<numberOfResponses {
        if Int(numbers[j])! == answerNumber {
            points += 1
        }
    }
    print(points)
}