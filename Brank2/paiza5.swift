let input = readLine()!.split(separator: " ").map { Int($0)! }
let H = input[0]
let W = input[1]
let D = input[2]

var map = [[Int]](repeating: [Int](repeating: 0, count: W), count: H)
var x = 0
var y = 0
var count = 1


if D == 1 {
    for i in 0..<H {
        for j in 0...min(i, W - 1) {
            map[i - j][j] = count
            count += 1
        }
    }

    for i in 1..<W {
        for j in 0..<min(H, W - i) {
            map[H - 1 - j][i + j] = count
            count += 1
        }
    }
}

if D == 2 {
    for i in 0..<H {
        for j in 0..<W {
            map[i][j] = count
            count += 1
        }
    }
}

if D == 3 {
    for i in 0..<W {
        for j in 0..<H {
            map[j][i] = count
            count += 1
        }
    }
}

if D == 4 {
for i in 0..<W {
    for j in 0...min(i, H-1) {
        map[j][i-j] = count
        count += 1
    }
}

for i in 1..<H {
    for j in 0..<min(H-i, W) {
        map[i+j][W-1-j] = count
        count += 1
    }
  }
}

for row in map {
    print(row.map { String($0) }.joined(separator: " "))
}
