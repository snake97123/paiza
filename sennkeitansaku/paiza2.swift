import Foundation

let n = Int(readLine()!)!
let numberArray = readLine()!.components(separatedBy: " ")

var min = Int(numberArray[0])!
var max = Int(numberArray[0])!

for item in numberArray {
    let number = Int(item)!
    if number < min {
        min = number
    } else if number > max {
        max = number 
    }
}