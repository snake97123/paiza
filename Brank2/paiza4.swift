let inputInformationOfCoordinate = readLine()!.split(separator: " ").map { Int($0)! }
let h = inputInformationOfCoordinate[0], w = inputInformationOfCoordinate[1]
var map = [[Character]]()

for _ in 0..<h {
    let row = Array(readLine()!)
    map.append(row)
}

let coordinateRewriteCharacter = readLine()!.split(separator: " ").map { Int($0)! }
let y = coordinateRewriteCharacter[0], x = coordinateRewriteCharacter[1]

for i in 0..<h {
    for j in 0..<w {
        if i == y || j == x || abs(i-y) == abs(j-x) {
            if map[i][j] == "." {
                map[i][j] = "#"
            } else {
                map[i][j] = "."
            }
        }
    }
}

for row in map {
    print(String(row))
}