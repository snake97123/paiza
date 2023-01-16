import Foundation

let n = Int(readLine()!)!
var greatest_common_divisor = 0

func gcd(_ a : Int, _ b : Int) -> Int {
    var a = a
    var b = b
    while b != 0 {
        (a, b) = (b, a % b)
    }
    return abs(a)
}
for i in 1..<n + 1 {
    for j in 1..<(n / 2) + 1{
        let common_divisor = gcd(i, j)
        if common_divisor > greatest_common_divisor {
            greatest_common_divisor = common_divisor
        }
    }
}

print(greatest_common_divisor)