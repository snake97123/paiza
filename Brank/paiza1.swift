let n = Int(readLine()!)!
var numberSum = 0

for _ in 0..<n {
    let number = Int(readLine()!)!
    if number >= 5 {
        numberSum += number 
    }
}

print(numberSum)