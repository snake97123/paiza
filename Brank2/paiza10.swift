import Foundation

let n = Int(readLine()!)!
var nowIndex = 0
var t = [Int](repeating: 0, count: n)
var x = [Int](repeating: 0, count: n)
var y = [Int](repeating: 0, count: n)

for i in 0..<n{
    let coordinateInformation = readLine()!.split(separator: " ").map { Int($0)! }
    t[i] = coordinateInformation[0]
    x[i] = coordinateInformation[1]
    y[i] = coordinateInformation[2]
}

for i in 0...100 {
    if i == t[nowIndex] {
        print("\(x[nowIndex]) \(y[nowIndex])")
        nowIndex += 1
    } else {
        let newY = y[nowIndex - 1] + (i - t[nowIndex - 1]) * (y[nowIndex] - y[nowIndex - 1]) / (t[nowIndex] - t[nowIndex - 1])
        let newX = x[nowIndex - 1] + (i - t[nowIndex - 1]) * (x[nowIndex] - x[nowIndex - 1]) / (t[nowIndex] - t[nowIndex - 1])
        print("\(newX) \(newY)")
    }
}
