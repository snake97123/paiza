import Foundation

let inputInformation = readLine()!.components(separatedBy: " ")
let N = Int(inputInformation[0])!
let M = Int(inputInformation[1])!

var personMatrix = readLine()!.components(separatedBy: " ")
let interruptPerson = readLine()!.components(separatedBy: " ")
let interruptLocation = readLine()!.components(separatedBy: " ")
for i in 0..<M {
  personMatrix.insert(interruptPerson[i], at: Int(interruptLocation[i])! - 1)
}

for name in personMatrix{
    print(name)
}