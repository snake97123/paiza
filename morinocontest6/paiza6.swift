let maxPitchingNumber = Int(readLine()!)!
var judgeEnablePitching = true 
var sumPitchingNumber = 0
var changeIning = 0

for i in 0..<9 {
let pitchingNumber = Int(readLine()!)!
    sumPitchingNumber += pitchingNumber
    judgeEnablePitching = judgePitching(sumPitchingNumber: sumPitchingNumber, maxPitchingNumber: maxPitchingNumber)
    if judgeEnablePitching == false {
        changeIning = i
        break
    } 
}

if judgeEnablePitching {
    print("Yes")
} else {
    print(changeIning + 1)
}

func judgePitching(sumPitchingNumber: Int, maxPitchingNumber: Int) -> Bool{
    return maxPitchingNumber >= sumPitchingNumber
}