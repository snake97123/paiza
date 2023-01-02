import Foundation

let numbers = readLine()!.map{ $0 }
var count = 0

for i in 0..<3 {
   if numbers[i] == "1" {
        count += 1
   }
}

print(count)