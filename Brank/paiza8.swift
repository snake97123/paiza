let n = Int(readLine()!)! 
var dict = [String: Int]() 

for _ in 0..<n {
    let input = readLine()!.split(separator: " ") 
    let s = String(input[0]) 
    let d = Int(input[1])! 
    dict[s, default: 0] += d
}

let sortedDict = dict.sorted { $0.value > $1.value } 
for (key, value) in sortedDict {
    print("\(key) \(value)") 
}