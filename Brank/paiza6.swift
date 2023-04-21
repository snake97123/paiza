import Foundation

func countSubstring(searchStr: String, str: String) -> Int {
    var count = 0
    var startIndex = str.startIndex
    while let range = str.range(of: searchStr, range: startIndex..<str.endIndex) {
        count += 1
        startIndex = range.upperBound
    }
    return count
}


let searchStr = readLine()!
let str = readLine()!
print(countSubstring(searchStr: searchStr, str: str))