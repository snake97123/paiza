let input = readLine()!.split(separator: " ").map { Int($0)! }
let n = input[0]
let k = input[1]
let a = readLine()!.split(separator: " ").map { Int($0)! }

let rangeSumArray : [Int] = []

for i in 0..<n - k + 1 {
    var sum = 0
    for j in i..<i + k {
        sum += a[j]
    }
    rangeSumArray.append(sum)
}

print(rangeSumArray.max()!)