import Foundation

let n = Int(readLine()!)!
let subjectWeights = readLine()!.components(separatedBy: " ")
var maxScore = 0
var score = 0

for _ in 0..<n {
    let subjectScore = readLine()!.components(separatedBy: " ")
    
    for i in 0..<5 {
        score +=  Int(subjectWeights[i])! * Int(subjectScore[i])!
    }
    
    maxScore = max(score, maxScore)
    score = 0
}

print(maxScore)