var testScores : [Int] = [0,0,0,0,0]

for i in 0..<5 {
    testScores[i] = Int(readLine()!)!
}

testScores.sort { $0 > $1}
print(testScores[2])