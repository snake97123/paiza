let nm = readLine()!.split(separator: " ").map{ Int($0)! }
let (n, m) = (nm[0], nm[1])

var adjacencyMatrix = Array(repeating: Array(repeating: 999, count: n), count: n)

for i in 0..<n {
    adjacencyMatrix[i][i] = 0
}

for _ in 0..<m {
    let input = readLine()!.split(separator: " ").map{ Int($0)! }
    let (a, b, c) = (input[0]-1, input[1]-1, input[2])
    adjacencyMatrix[a][b] = c
}

for row in adjacencyMatrix {
    print(row.map{ String($0) }.joined(separator: " "))
}