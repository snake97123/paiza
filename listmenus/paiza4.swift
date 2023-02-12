let n = Int(readLine()!)!
var dumbbellWeights: [Int] = []

for _ in 0..<n {
 let input = readLine()!.split(separator: " ")
    if input[0] == "ADD_LEFT" {
        dumbbellWeights.insert(Int(input[1])!, at: 0) 
    } 
    if input[0] == "ADD_RIGHT" {
        dumbbellWeights.append(Int(input[1])!)
    }
    if input[0] == "REMOVE_RIGHT" {
        dumbbellWeights.removeLast()
    }
    if input[0] == "REMOVE_LEFT" {
        dumbbellWeights.removeFirst()
    }
 }
 
 let weightSum = dumbbellWeights.reduce(0, +)
 print(weightSum)