import Foundation

let inputInformation = readLine()!.components(separatedBy: " ")
let n = Int(inputInformation[0])!
let m = Int(inputInformation[1])!
let area = n * m 
let blockArea = 2

let blockNum = area / blockArea
print(blockNum)