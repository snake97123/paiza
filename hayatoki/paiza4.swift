import Foundation

let str = readLine()!
let ans = str.replacingOccurrences(of: ", maybe.", with: "!!")
print(ans)