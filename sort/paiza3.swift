// バブルソートを行う関数
func bubbleSort(_ array: [Int]) {
    var sortedArray = array
    let n = sortedArray.count
    // 配列の要素を順番に比較して入れ替える
    for i in 0..<n-1 {
        for j in (i+1..<n).reversed() {
            if sortedArray[j] < sortedArray[j-1] {
                let temp = sortedArray[j]
                sortedArray[j] = sortedArray[j-1]
                sortedArray[j-1] = temp
            }
        }
        print(sortedArray.map { String($0) }.joined(separator: " "))
    }
}

// 入力値を取得する
let n = Int(readLine()!)!
let array = readLine()!.split(separator: " ").map { Int($0)! }
bubbleSort(array)
  
