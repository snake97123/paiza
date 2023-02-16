import Foundation
let n = Int(readLine()!)!
var cursorIndex = 0;
let inputKey = readLine()!.components(separatedBy: " ")
var monitor = [String]()

for i in 0..<n {
    if inputKey[i] == "Left" && cursorIndex != 0 {
        cursorIndex -= 1
    }
    if inputKey[i] == "Right" && cursorIndex != monitor.count {
        cursorIndex += 1
    }
    if inputKey[i] == "Delete" && cursorIndex != 0 {
        monitor.remove(at: cursorIndex - 1)
        cursorIndex -= 1
    }
    if inputKey[i].count == 1 {
        monitor.insert(inputKey[i], at: cursorIndex)
        cursorIndex += 1
    }
}

for i in 0..<monitor.count {
    if i != (monitor.count - 1) {
        print("\(monitor[i]) ", terminator: "")
    } else {
    print("\(monitor[i])")
    }
}