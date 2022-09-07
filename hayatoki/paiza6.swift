import Foundation

let formula = readLine()!.components(separatedBy: " + ")
let formula1 = Int(formula[0])!
let formula2 = Int(formula[1])!

let ans = formula1 + formula2

print(ans)