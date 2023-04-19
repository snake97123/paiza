let inputLine = readLine()!

var numberDivided = [String]()
var ans = 0

for i in stride(from: 0, to: inputLine.count, by: 8) {
    let startIndex = inputLine.index(inputLine.startIndex, offsetBy: i)
    let endIndex = inputLine.index(startIndex, offsetBy: 8, limitedBy: inputLine.endIndex) ?? inputLine.endIndex
    numberDivided.append(String(inputLine[startIndex..<endIndex]))
}


for number in numberDivided {
    ans += Int(number)!
}

print(ans)