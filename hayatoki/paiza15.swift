import Foundation

let temperature = readLine()!.components(separatedBy: " ")
let t1 = Int(temperature[0])!
let t2 = Int(temperature[1])!
let temperature_difference = t2 - t1
if temperature_difference > 0 {
    print("+\(temperature_difference)")
} else {
    print(temperature_difference)
}