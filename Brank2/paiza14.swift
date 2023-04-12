// 入力値を読み込む
let input = readLine()!.split(separator: " ").map { Int($0)! }
let N = input[0] 
let X = input[1]
var w = [Int]() 
for _ in 0..<N {
    w.append(Int(readLine()!)!) 
}

// 動的計画法でナップサック問題を解く
var dp = [[Int]](repeating: [Int](repeating: 0, count: X + 1), count: N + 1) 

for i in 1...N { 
    for j in 0...X { 
        if j < w[i - 1] { 
            dp[i][j] = dp[i - 1][j] 
        } else { 
            dp[i][j] = max(dp[i - 1][j], dp[i - 1][j - w[i - 1]] + w[i - 1]) 
        }
    }
}


print(dp[N][X]) 