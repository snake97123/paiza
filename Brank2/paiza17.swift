import Foundation

let s = readLine()!
for i in 0..<s.count {
    let startIndex = s.index(s.startIndex, offsetBy: i)
    let startSubString = s[startIndex]
    if let _ = Int(String(startSubString)) {
        for j in i..<s.count {
            let endIndex = s.index(s.startIndex, offsetBy: j)
            let subString = s[endIndex]
            if let _ = Int(String(subString)) {
                print(s[startIndex...endIndex])
            }
        }
    }
}
