import Foundation

let inputInformation = readLine()!.split(separator: " ").map{Int($0)!}
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

if changingY + 1 < y {
    if map[changingY + 1][changingX] == "." {
        map[changingY + 1][changingX] = "#"
    } else if map[changingY + 1][changingX] == "#" {
        map[changingY + 1][changingX] = "."
    }
}

if changingX + 1 < x {
    if map[changingY][changingX + 1] == "." {
        map[changingY][changingX + 1] = "#"
    } else if map[changingY][changingX + 1] == "#" {
        map[changingY][changingX + 1] = "."
    }
}

if changingY - 1 >= 0 {
    if map[changingY - 1][changingX] == "." {
        map[changingY - 1][changingX] = "#"
    } else if map[changingY - 1][changingX] == "#" {
        map[changingY - 1][changingX] = "."
    }
}

if changingX - 1 >= 0 {
    if map[changingY][changingX - 1] == "." {
        map[changingY][changingX - 1] = "#"
    } else if map[changingY][changingX - 1] == "#" {
        map[changingY][changingX - 1] = "."
    }
}

for coordinate in map {
    print(coordinate.joined(separator: ""))
}