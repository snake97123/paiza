import Foundation
 
let n = Int(readLine()!)!
precondition(1 <= n && Double(n) <= pow(10, 10))
 
var answer = Int.max
for a in 1...Int(floor(sqrt(Double(n)))) where n % a == 0 {
    let b = n / a
    let f = F(a, b)
    answer = min(answer, f)
}
print(answer)
 
private func F(_ lhs: Int, _ rhs : Int) -> Int {
    max(Array(String(lhs)).count, Array(String(rhs)).count)
}