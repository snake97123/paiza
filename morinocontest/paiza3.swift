import Foundation

let n = Int(readLine()!)!
var playerData:[Int:String] = [:]

for _ in 0..<n {
    let playerInformation = readLine()!.components(separatedBy: " ")
let number = Int(playerInformation[0])!
let name = playerInformation[1]
playerData.updateValue(name, forKey: number)

}

let sortedPlayerData = playerData.sorted(by: <)

for (key, value) in sortedPlayerData {
    print("\(key) \(value)")
}
