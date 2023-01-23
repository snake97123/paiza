import Foundation

let winningNumber = Int(readLine()!)!
let n = Int(readLine()!)!

for i in 0..<n {
    let numberOfLottery = Int(readLine()!)!
    if numberOfLottery == winningNumber {
        print("first")
        continue
    }
    if numberOfLottery == winningNumber - 1 || numberOfLottery == winningNumber + 1 {
        print("adjacent")
        continue
    }
    if numberOfLottery % 10000 == winningNumber % 10000 {
        print("second")
        continue
    }
    if numberOfLottery % 1000 == winningNumber % 1000 {
        print("third")
        continue
    }
    print("blank")
    
}