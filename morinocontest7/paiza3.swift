import Foundation

let n = Int(readLine()!)!
let temperatures = readLine()!.components(separatedBy: " ")
var intedTemperatures: [Int] = []

intedTemperatures = temperatures.map({ (value: String) -> Int in
    return Int(value)!
})

let maxTemperature = intedTemperatures.max()!
let minTemperature = intedTemperatures.min()!
let answer = maxTemperature - minTemperature
print(answer)