var subjectScores = [0,0,0,0,0]
for i in 0..<5 {
    let score = Int(readLine()!)!
    subjectScores[i] = score
}

let maxScore = subjectScores.max()!
let minScore = subjectScores.min()!

let scoreDifference = maxScore - minScore
print(scoreDifference)