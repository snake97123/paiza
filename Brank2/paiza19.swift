import Foundation

var str = readLine()!

func convertionString(_ str: String) -> String {
    var newStr = ""
    for char in str {
        switch char {
        case "4", "@":
            newStr.append("a")
        case "!", "1":
            newStr.append("i")
        case "2":
            newStr.append("z")
        default:
            newStr.append(char)
        }
    }
    return newStr
}

if str.contains("paiza") {
    print("paiza")
} else {
    if convertionString(str).contains("paiza") {
        print("leet")
    } else {
        print("nothing")
    }
}