import Foundation

let inputInformation = readLine()!.components(separatedBy: " ")

let n = Int(inputInformation[0])!
let q = Int(inputInformation[1])!

var itemsArray = [String](repeating: "0", count: n)

for i in 0..<n {
    let item = readLine()!
    itemsArray[i] = item
}

for _ in 0..<q {
    let searchItem = readLine()!
    let firstIndex = itemsArray.firstIndex(of: searchItem)
    if firstIndex != nil {
        print(firstIndex! + 1)
    } else {
        print(-1)
    }
}