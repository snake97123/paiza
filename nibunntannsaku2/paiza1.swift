import Foundation

func minimumTestCount(n: Int) -> Int {
    var tests = 0
    var i = 1
    while i < n {
        i *= 2
        tests += 1
    }
    return tests
}

let n = Int(readLine()!)!
print(minimumTestCount(n: n))