import Foundation 

let inputInformations = readLine()!.components(separatedBy: " ")
let A = Int(inputInformations[0])!
let B = Int(inputInformations[1])!

if A >= 0 && B >= 0 {
    print(A * A)
} else if A < 0 && B >= 0 {
    print(A * B)
} else {
    print(B * B)
}