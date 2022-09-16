import Foundation 

let n = Int(readLine()!)!
var checkPants = false
var sumPrice = 0

for _ in 0..<n {
    let itemInformation =  readLine()!.components(separatedBy: " ")
    
    let itemName = itemInformation[0]
    if checkPants == false {
    checkPants = checkName(itemName: itemName)
    }
    let itemPrice = Int(itemInformation[1])!
    sumPrice = calculatePrice(itemPrice: itemPrice)
}

if checkPants == true && sumPrice >= 2000 {
    sumPrice -= 500
}

print(sumPrice)

func checkName(itemName: String) -> Bool {
    if itemName == "pants" {
        return true
    } else {
        return false
    }
}

func calculatePrice(itemPrice: Int) -> Int {
    sumPrice += itemPrice
    return sumPrice
}