import Foundation

// 入力値を読み込む
let input = readLine()!.split(separator: " ").map { Int($0)! }
let N = input[0]
let K = input[1]
var P = Array<Int>()
for _ in 0..<N {
    let price = Int(readLine()!)!
    P.append(price)
}

// 合計の最大値を初期化する
var maxSum = 0

// N回ループする
for _ in 0..<N {
    // Pから先頭のK個の数字を取り出す
    let subArray = Array(P[0..<K])
    // subArrayの合計を計算する
    let sum = subArray.reduce(0, +)
    // sumがmaxSumより大きければ更新する
    if sum > maxSum {
        maxSum = sum
    }
    // Pを右に1回ローテートさせる
    let last = P.removeLast()
    P.insert(last, at: 0)
}

// 合計の最大値を出力する
print(maxSum)