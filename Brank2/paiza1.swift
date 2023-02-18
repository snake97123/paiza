import Foundation

let inputInformation = readLine()!.split(separator:" ").map{Int($0)!}
var map: [[String]] = []
let y = inputInformation[0]
let x = inputInformation[1]

for _ in 0..<y {
    let input = Array(readLine()!).map{String($0)}
    map.append(input)
}

let changingCoordinate = readLine()!.split(separator:" ").map{Int($0)!}
let changingY = changingCoordinate[0]
let changingX = changingCoordinate[1]

if map[changingY][changingX] == "." {
    map[changingY][changingX] = "#"
} else if map[changingY][changingX] == "#" {
    map[changingY][changingX] = "."
}

for coordinate in map {
       print(coordinate.joined(separator: ""))
}