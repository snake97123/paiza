let n = Int(readLine()!)!
var arr = [[Int]]()

for _ in 0..<n {
    let row = readLine()!.split(separator: " ").map{ Int($0)! }
    arr.append(row)
}

var maxSum = 0 

for i in 0..<n {
    var rowSum = 0
    for j in 0..<n {
        rowSum += arr[i][j]
    }
    
    if rowSum > maxSum {
        maxSum = rowSum
    }
}

for j in 0..<n {
    var colSum = 0
    for i in 0..<n {
        colSum += arr[i][j]
    }
    
    if colSum > maxSum {
        maxSum = colSum
    }
}


var diagonalSum1 = 0
for i in 0..<n {
    diagonalSum1 += arr[i][i]
}

if diagonalSum1 > maxSum {
    maxSum = diagonalSum1
}

var diagonalSum2 = 0
for i in 0..<n {
    diagonalSum2 += arr[i][n-i-1]
}

if diagonalSum2 > maxSum {
    maxSum = diagonalSum2
}

print(maxSum)