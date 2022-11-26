import Foundation 

let inputInformation = readLine()!.components(separatedBy: " ")
let f1 = Array(inputInformation[0])
let f2 = Array(inputInformation[1])

if f1[0] < f2[0] {
    print("up")
} else {
    print("down")
}
