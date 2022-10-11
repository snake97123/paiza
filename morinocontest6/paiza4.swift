import Foundation
let coordinate = readLine()!.components(separatedBy: " ")
let x = Int(coordinate[0])!
let y = Int(coordinate[1])!

if x == 0 && y == 0 {
    print(1)
} else {
    print(abs(x) + abs(y))
}