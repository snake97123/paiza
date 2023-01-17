import Foundation 

let n = Int(readLine()!)!
var numberOnePlayerIndex = Array<Int>(repeating:0, count:n)
var battingAverageArrays = Array<Float>(repeating:0, count:n)
var RBIArrays = Array<Int>(repeating:0, count:n)
var homeRunArrays = Array<Int>(repeating:0, count:n)
for i in 0..<n {
    let inputInformations = readLine()!.components(separatedBy: " ")
    let battingAverage = Float(inputInformations[0])!
    let RBI = Int(inputInformations[1])!
    let homeRun = Int(inputInformations[2])!
    battingAverageArrays[i] = battingAverage
    RBIArrays[i] = RBI
    homeRunArrays[i] = homeRun 
}

let maxBattingAverage = battingAverageArrays.max()
let maxRBI = RBIArrays.max()
let maxHomeRun = homeRunArrays.max()
for i in 0..<n {
    if battingAverageArrays[i] == maxBattingAverage {
        numberOnePlayerIndex[i] += 1
    }
    if RBIArrays[i] == maxRBI {
        numberOnePlayerIndex[i] += 1
    }
    if homeRunArrays[i] == maxHomeRun {
        numberOnePlayerIndex[i] += 1
    }
}
// let firstIndexOfBattingAverageArrays = battingAverageArrays.firstIndex(of: maxBattingAverage!)
// let firstIndexOfRBIArrays = RBIArrays.firstIndex(of: maxRBI!)
// let firstIndexOfHomeRunArrays = homeRunArrays.firstIndex(of: maxHomeRun!)

let maxValue = numberOnePlayerIndex.max()
if maxValue! == 3 {
    print("Triple")
} else if maxValue! == 2 {
    print("Double")
} else {
    print("Nobody")
}