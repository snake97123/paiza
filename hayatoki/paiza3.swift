import Foundation

let inputLines = readLine()!.components(separatedBy: " ")
let f1 = Int(inputLines[0])!
let f2 = Int(inputLines[1])!

let ans = abs(f1 - f2)
print(ans)