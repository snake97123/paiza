let problemCounts = Int(readLine()!)!
var score = 0
var ans = 0

for _ in 0..<problemCounts {
   let sumScore = scoring(score: score)
   ans += sumScore
}

func scoring(score: Int) -> Int {
    let result = readLine()!
    var sumScore = 0
    if result == "correct" {
        sumScore += 2
    } else if result == "incorrect" {
        sumScore -= 1
    } else {
        sumScore = score
    }
    return sumScore
}

print(ans)