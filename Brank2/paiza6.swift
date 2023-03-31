import Foundation

let inputInformation = readLine()!.split(separator: " ").map{ Int($0)! }
let X = inputInformation[0]
let M = inputInformation[1]
let N = inputInformation[2]
var pow = 1
var seed = 0 
for _ in 0..<N {
    pow *= X 
    pow %= M
    seed += pow 
    seed %= M 
    print(seed)
}