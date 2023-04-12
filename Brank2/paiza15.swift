let N = Int(readLine()!)!
var numbers = [Int]()

// N個の自然数を入力する
for _ in 0..<N {
    let inputNumber = Int(readLine()!)!
    numbers.append(inputNumber)
}

var minAbsDiff = Int.max

// すべての数の組み合わせを調べる
for i in 0..<N {
    for j in i+1..<N {
        var num1 = numbers[i]
        var num2 = numbers[j]
        
        // num1がnum2よりも大きい場合、入れ替える
        if num1 > num2 {
            swap(&num1, &num2)
        }
        
        
                        // num1とnum2を操作する
                        let num1PlusOne = num1 + 1
                        let num1MinusOne = num1 - 1
                        let num1PutOneFirst = Int("\(1)\(num1)")!
                        let num1PutOneLast = Int("\(num1)1")!
                        
                        let num2PlusOne = num2 + 1
                        let num2MinusOne = num2 - 1
                        let num2PutOneFirst = Int("\(1)\(num2)")!
                        let num2PutOneLast = Int("\(num2)1")!
                        
                        // それぞれの操作後に絶対値の差を求める
                        let diff1 = abs(num1PlusOne - num2PlusOne)
                        let diff2 = abs(num1PlusOne - num2MinusOne)
                        let diff3 = abs(num1PlusOne - num2PutOneFirst)
                        let diff4 = abs(num1PlusOne - num2PutOneLast)
                        
                        let diff5 = abs(num1MinusOne - num2PlusOne)
                        let diff6 = abs(num1MinusOne - num2MinusOne)
                        let diff7 = abs(num1MinusOne - num2PutOneFirst)
                        let diff8 = abs(num1MinusOne - num2PutOneLast)
                        
                        let diff9 = abs(num1PutOneFirst - num2PlusOne)
                        let diff10 = abs(num1PutOneFirst - num2MinusOne)
                        let diff11 = abs(num1PutOneFirst - num2PutOneFirst)
                        let diff12 = abs(num1PutOneFirst - num2PutOneLast)
                        
                        let diff13 = abs(num1PutOneLast - num2PlusOne)
                        let diff14 = abs(num1PutOneLast - num2MinusOne)
                        let diff15 = abs(num1PutOneLast - num2PutOneFirst)
                        let diff16 = abs(num1PutOneLast - num2PutOneLast)
                        
                        // すべての操作後の絶対値の差の最小値を求める
                        let minDiff = min(diff1, diff2, diff3, diff4, diff5, diff6, diff7, diff8, diff9, diff10, diff11, diff12, diff13, diff14, diff15, diff16)
                        
                        // 現在の最小値と比較して、より小さい場合は更新する
                        minAbsDiff = min(minAbsDiff, minDiff)
                    }
              }
        
 print(minAbsDiff)