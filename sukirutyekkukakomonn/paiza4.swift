// if文で記述
import Foundation

let n = Int(readLine()!)!
var strikeCount = 0
var ballCount = 0

for _ in 0..<n {
    let call = readLine()!
    if call == "strike" {
        strikeCount += 1
        
        if strikeCount == 3 {
            print("out!")
        } else {
            print("strike!")
        }
        
    }
    if call == "ball" {
        ballCount += 1
        
        if ballCount == 4 {
            print("fourball!")
        } else {
            print("ball!")
        }
    }
    
}

// switch文で記述
import Foundation

let n = Int(readLine()!)!
var strikeCount = 0
var ballCount = 0

for _ in 0..<n {
    let call = readLine()!
    switch call {
    case "strike":
        strikeCount += 1
        if strikeCount == 3 {
            print("out!")
        } else {
            print("strike!")
        }
    case "ball":
        ballCount += 1
        if ballCount == 4 {
            print("fourball!")
        } else {
            print("ball!")
        }
    default: break
    }
}