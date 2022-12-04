import Foundation

let n = Int(readLine()!)!
var firstArrays = readLine()!.components(separatedBy: " ")
var secondArrays = readLine()!.components(separatedBy: " ")
var newArrays:[Int] = []

for i in 0..<n {
    let searchNumber1 = Int(firstArrays[i])!
    let searchNumber2 = Int(secondArrays[i])!
    let index1 = newArrays.firstIndex(of: searchNumber1)
    if index1 == nil {
        newArrays.append(searchNumber1)
    }
    let index2 = newArrays.firstIndex(of: searchNumber2)
    if index2 == nil {
        newArrays.append(searchNumber2)
    }
}

var uniqueArray = Array(Set(newArrays))

uniqueArray.sort()

for i in 0..<uniqueArray.count{
    if i != uniqueArray.count - 1{
    print(uniqueArray[i], terminator: " ")
    } else {
        print(uniqueArray[i])
    }
}
