import Foundation
// 入力を取得する
var board: [[Character]] = []
for _ in 0..<5 {
    let row = Array(readLine()!)
    board.append(row)
}

// 横方向のチェック
for row in board {
    if row.filter({ $0 == "O" }).count == 5 {
        print("O")
        exit(0)
    } else if row.filter({ $0 == "X" }).count == 5 {
        print("X")
        exit(0)
    }
}

// 縦方向のチェック
for j in 0..<5 {
    let column = board.map({ $0[j] })
    if column.filter({ $0 == "O" }).count == 5 {
        print("O")
        exit(0)
    } else if column.filter({ $0 == "X" }).count == 5 {
        print("X")
        exit(0)
    }
}

// 斜め方向のチェック
let leftDiagonal = (0..<5).map { board[$0][$0] }
if leftDiagonal.filter({ $0 == "O" }).count == 5 {
    print("O")
    exit(0)
} else if leftDiagonal.filter({ $0 == "X" }).count == 5 {
    print("X")
    exit(0)
}

let rightDiagonal = (0..<5).map { board[$0][4-$0] }
if rightDiagonal.filter({ $0 == "O" }).count == 5 {
    print("O")
    exit(0)
} else if rightDiagonal.filter({ $0 == "X" }).count == 5 {
    print("X")
    exit(0)
}

// 引き分け
print("D")
