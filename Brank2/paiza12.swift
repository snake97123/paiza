import Foundation
// 入力値を読み込む
let N = Int(readLine()!)! // 放送したい単語の数
let S = readLine()! // 放送禁止用語
var V = [String]() // 放送したい単語の配列
for _ in 1...N {
    V.append(readLine()!) // 配列に単語を追加
}

// 放送禁止用語の長さと半分の長さを計算する
let lenS = S.count // 放送禁止用語の長さ
var halfS = 0
//奇数か偶数かで場合わけ。
if lenS % 2 == 0 {
 halfS = lenS / 2 
} else {
 halfS = lenS / 2 + 1
}
// 放送したい単語ごとに検閲を行う
for word in V {
    // 単語が放送禁止用語と完全に一致する場合は "banned" と出力する
    if word == S {
        print("banned")
    } else {
        // 単語が放送禁止用語と同じ長さであるかチェックする
        if word.count == lenS {
            // 単語の前半分と後ろ半分を切り出す
            let firstHalf = word.prefix(halfS) // 単語の前半分
            let secondHalf = word.suffix(halfS) // 単語の後半分

            // 単語の前半分または後ろ半分が放送禁止用語と一致するかチェックする
            if firstHalf == S.prefix(halfS) {
                // 前半分が一致する場合は、前半分をxで置き換える
                let censoredWord = word.replacingOccurrences(of: firstHalf, with: String(repeating: "x", count: halfS))
                print(censoredWord)
            } else if secondHalf == S.suffix(halfS) {
                // 後半分が一致する場合は、後半分をxで置き換える
                let censoredWord = word.replacingOccurrences(of: secondHalf, with: String(repeating: "x", count: halfS))
                print(censoredWord)
            } else {
                // どちらも一致しない場合は、単語をそのまま出力する
                print(word)
            }
        } else {
            // 単語が放送禁止用語と同じ長さでない場合は、単語をそのまま出力する
            print(word)
        }
    }
}
