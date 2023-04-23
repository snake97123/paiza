let pattern = readLine()!
let target = readLine()!

var count = 0

if target.count >= pattern.count {
    for i in 0...(target.count - pattern.count) {
        let start = target.index(target.startIndex, offsetBy: i)
        let end = target.index(target.startIndex, offsetBy: i + pattern.count)
        let sub = target[start..<end]
        
        if sub == pattern {
            count += 1
        }
    }
}

print(count)