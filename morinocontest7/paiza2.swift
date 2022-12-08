import Foundation 

let inputInformations = readLine()!.components(separatedBy: " ")
let a = Int(inputInformations[0])!
let b = Int(inputInformations[1])!
let c = Int(inputInformations[2])!

if 1 <= c && c <= 4 {
    print(a)
} 

if 5 <= c && c <= 9 {
    print(a + b)
}

if 10 <= c && c <= 14 {
    print(a + 2 * b)
}

if 15 <= c && c <= 19 {
    print(a + 3 * b)
}

if 20 <= c && c <= 24 {
    print(a + 4 * b)
}