import Foundation

let k = Int(readLine()!)!

var deck = [String](repeating: "", count: 52)
var upperSide = [String](repeating: "", count: 26)
var lowerSide = [String](repeating: "", count: 26)

let mark = ["S", "H", "D", "C"]

for i in stride(from: 3, through: 0, by: -1) {
    for j in stride(from: 13, through: 1, by: -1) {
        deck[i * 13 + j - 1] = mark[i] + "_" + String(j)
    }
}

for _ in 0..<k {
    for j in 0..<26 {
        upperSide[j] = deck[j]
    }

    for j in 0..<26 {
        lowerSide[j] = deck[26 + j]
    }

    for j in 0..<52 {
        if j % 2 == 0 {
            deck[j] = upperSide[j / 2]
        } else {
            deck[j] = lowerSide[j / 2]
        }
    }
}

for val in deck {
    print(val)
}
