// 入力される値
let n = Int(readLine()!)! // 配列の要素数
var A = readLine()!.split(separator: " ").map { Int($0)! } // 配列

// 挿入ソート
for i in 1..<n {
    // i番目の要素をvに保存
    let v = A[i]
    // i-1番目から0番目まで逆順に見ていく
    var j = i - 1
    while j >= 0 && A[j] > v {
        // j番目の要素がvより大きい場合は右にずらす
        A[j + 1] = A[j]
        j -= 1
    }
    // j+1番目にvを挿入する
    A[j + 1] = v
    // 配列を出力する
    print(A.map { String($0) }.joined(separator: " "))
}