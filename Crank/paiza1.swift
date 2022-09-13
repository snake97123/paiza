import Foundation

let n = Int(readLine()!)!
for _ in 0..<n {
    let nameAndAge = readLine()!.components(separatedBy: " ")
    let name = nameAndAge[0]
    let age = Int(nameAndAge[1])!
    print("\(name) \(age + 1)")
}
