var dasekis = [Int](repeating: 0, count: 5)
var flag = true

for _ in 0..<5 {
    let daseki = Int(readLine()!)!
    dasekis[daseki] = 1
}

for i in 1..<5 {
    if dasekis[i] == 0 {
        flag = false
        break
    }
}

if flag == true {
    print("Yes")
} else {
    print("No")
}