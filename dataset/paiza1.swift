import Foundation 

let inputInformations = readLine()!.components(separatedBy: " ")

let H = Int(inputInformations[0])!
let W = Int(inputInformations[1])!
let r = Int(inputInformations[2])!
let c = Int(inputInformations[3])!

var mapArray = Array<Array>(repeating: [], count: H)

for i in 0..<H {
    let input = readLine()!
    let separatedInput = Array(input)
    // mapArray[i].append(contentsOf: separatedInput)
    mapArray[i] = separatedInput
}


if mapArray[r - 1][c - 1] as! Character == "#" {
    print("Yes")
} else {
    print("No")
}
