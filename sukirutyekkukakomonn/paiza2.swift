import Foundation

let n = Int(readLine()!)!
var wordSearchHistory : [String] = []

for _ in 0..<n {
    let word = readLine()!
    if wordSearchHistory.contains(word) {
        let index = wordSearchHistory.firstIndex(of: word)!
        wordSearchHistory.remove(at: index)
    } 
    wordSearchHistory.insert(word, at: 0)
}

for word in wordSearchHistory {
    print(word)
}