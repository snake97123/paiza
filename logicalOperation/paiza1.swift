import Foundation

let inputInformation = readLine()!.components(separatedBy: " ")
let a = Int(inputInformation[0])!
let b = Int(inputInformation[1])!

if a == 1 && b == 1 {
    print(1)
} else {
    print(0)
}