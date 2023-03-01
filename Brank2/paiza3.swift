import Foundation

let baggageLength = readLine()!.split(separator: " ").map{Int($0)!}
let lengthCriteria = readLine()!.split(separator: " ").map{Int($0)!}
let priceList = readLine()!.split(separator: " ").map{Int($0)!}

let vertical = baggageLength[0]
let horizontal = baggageLength[1]
let height = baggageLength[2]

let l1 = lengthCriteria[0]
let l2 = lengthCriteria[1]
let l3 = lengthCriteria[2]
let l4 = lengthCriteria[3]
let l5 = lengthCriteria[4]

let m1 = priceList[0]
let m2 = priceList[1]
let m3 = priceList[2]
let m4 = priceList[3]
let m5 = priceList[4]
let m6 = priceList[5]

if height <= l1 {
  if max(vertical, horizontal) <= l2 {
    print(m1)
  } else if vertical + horizontal <= l3 {
    print(m2)
  } else {
    print(m3)
  }
} else {
  if baggageLength.max() <= l4 {
    print(m4)
  } else if vertical + horizontal + height <= l5 {
    print(m5)
  } else {
    print(vertical * horizontal * height * m6)
  }
}