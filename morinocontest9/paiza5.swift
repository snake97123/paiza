let input = readLine()!.split(separator: " ").map { Int($0)! }
let n = input[0]
let k = input[1]
let a = readLine()!.split(separator: " ").map { Int($0)! }

var dp = Array(repeating: Array(repeating: 0, count: k+1), count: n+1)
dp[0][0] = 1

for i in 1...n { 
    for j in 0...k { 
        dp[i][j] = dp[i-1][j] 
        if j >= a[i-1] { 
        dp[i][j] += dp[i-1][j-a[i-1]] 
            } 
    } 
}
print(dp[n][k])