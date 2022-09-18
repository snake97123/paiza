import Foundation
let n = Int(readLine()!)!

var upperCaseMode = false
for _ in 0..<n {
    let input = readLine()!.components(separatedBy: " ")
    if input[0] == "shift" {
        print(input[1].uppercased(), terminator: "")
    } else if input[0] == "capslock" {
        if upperCaseMode == true {
            upperCaseMode = false
        } else {
            upperCaseMode = true
        }
    } else {
        if upperCaseMode == true {
            print(input[0].uppercased(), terminator: "")
        } else {
            print(input[0], terminator: "")
        }
    }
}