import Foundation

let groupCount = readLine()!.components(separatedBy: " ")

let aGroupCount = Int(groupCount[0])!
let bGroupCount = Int(groupCount[1])!
let cGroupCount = Int(groupCount[2])!

var firstAskWorks = [Int](repeating: 0, count: aGroupCount + 1)
var secondAskWorks = [Int](repeating: 0 , count: bGroupCount + 1)

for _ in 0..<aGroupCount {
  let askWorkPeople = readLine()!.components(separatedBy: " ")
  let orderPerson = Int(askWorkPeople[0])!
  let contractor = Int(askWorkPeople[1])!

  firstAskWorks[orderPerson] = contractor
}


for _ in 0..<bGroupCount {
    let askWorkPeople = readLine()!.components(separatedBy: " ")
    let orderPerson = Int(askWorkPeople[0])!
    let contractor = Int(askWorkPeople[1])!
    
    secondAskWorks[orderPerson] = contractor
}

for i in 0..<aGroupCount {
    print((i + 1), secondAskWorks[firstAskWorks[i + 1]])
}
