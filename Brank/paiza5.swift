import Foundation 

let n = Int(readLine()!)!
var array: [(String, Int)] = []
for _ in 0..<n {
    let line = readLine()!.split(separator: " ")
    let str = String(line[0])
    let num = Int(line[1])!
    array.append((str, num))
}

let sortedArray = array.sorted(by: { $0.1 < $1.1 })

for tuple in sortedArray {
    print(tuple.0)
}
