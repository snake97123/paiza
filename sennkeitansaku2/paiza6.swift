let input = readLine()!.split(separator: " ").map { Int($0)! }
let (parkRows, parkColumns, picnicSpotSize, reservedSpotMaxNumber) = (input[0], input[1], input[2], input[3])

var park = [[Int]]()

for _ in 0..<parkRows {
    let row = readLine()!.split(separator: " ").map{ Int($0)! }
    park.append(row)
}

let possibleSpots = countPossiblePicnicSpots(parkRows: parkRows, parkColumns: parkColumns, picnicSpotSize: picnicSpotSize, reservedSpotMaxNumber: reservedSpotMaxNumber, park: park)
print(possibleSpots)

func countPossiblePicnicSpots(parkRows: Int, parkColumns: Int, picnicSpotSize: Int, reservedSpotMaxNumber: Int, park: [[Int]]) -> Int {
    var possibleSpots = 0
    let reservedSpots = Set(1...reservedSpotMaxNumber)

    for i in 0..<parkRows-picnicSpotSize+1 {
        for j in 0..<parkColumns-picnicSpotSize+1 {
            var validSpot = true
            outerLoop: for p in i..<i+picnicSpotSize {
                for q in j..<j+picnicSpotSize {
                    if !reservedSpots.contains(park[p][q]) {
                        validSpot = false
                        break outerLoop
                    }
                }
            }
            if validSpot {
                possibleSpots += 1
            }
        }
    }
    return possibleSpots
}
