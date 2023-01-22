import Foundation

func countWords(sentence: Array<String>) {
    var wordCounts: [(key: String, count:Int)] = []
    
    for word in words {
        if let index = wordCounts.firstIndex(where: { $0.key == word}) {
            wordCounts[index].count += 1
        }
        else {
            wordCounts.append((word, 1))
        }
    }
    // print(wordCounts)
    for (word, count) in wordCounts{
        print("\(word) \(count)")
     }
   }
    

let words = readLine()!.components(separatedBy: " ")
countWords(sentence: words)