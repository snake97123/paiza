import Foundation
let input_line=readLine()!.components(separatedBy: " ")
let k = Int(input_line[0])!
let s = Int(input_line[1])!
let distance = k * 1000 * 100
let steps = distance / s

if steps >= 10000 {
    print("yes")
} else {
    print("no")
}