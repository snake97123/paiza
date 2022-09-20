import Foundation

let numbers = readLine()!.components(separatedBy: " ")
let x = Int(numbers[0])!
let y = Int(numbers[1])!
let z = Int(numbers[2])!
var i = x

while i >= x {
    if i % y == z {
        print(i)
        break
    } else {
        i += 1
    }
}