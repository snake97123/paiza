import Foundation

let n = Int(readLine()!)!
let subjectWeights = readLine()!.components(separatedBy: " ").map { Int($0)!}
var maxScore = 0
var score = 0

for _ in 0..<n {
    let subjectScore = readLine()!.components(separatedBy: " ").map { Int($0)!}
    
    for i in 0..<5 {
        score +=  subjectWeights[i] * subjectScore[i]
    }
    
    maxScore = max(score, maxScore)
    score = 0
}

print(maxScore)