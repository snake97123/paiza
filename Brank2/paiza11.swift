import Foundation 

var n = Int(readLine()!)!

//視力ごとの正答数
var successCount = ["TA": 0, "TB": 0, "TC": 0, "TD": 0]
//視力ごとの失敗数
var failureCount = ["TA": 0, "TB": 0, "TC": 0, "TD": 0]
//合格か不合格かを格納する配列
var resultArray = ["TA": "", "TB": "", "TC": "", "TD": ""]

//各テストの結果を読み込みカウントする。
for _ in 0..<n {
    let resultInformation = readLine()!.split(separator: " ").map { String($0) }
    let test = resultInformation[0]
    let result = resultInformation[1]

    //テストの結果に応じてカウントする。
    if result == "ok" {
      switch test {
        case "TA":
        if resultArray["TA"] == "" {
          successCount["TA"]! += 1
          }
        case "TB":
        if resultArray["TB"] == "" {
          successCount["TB"]! += 1
          }
        case "TC":
        if resultArray["TC"] == "" {
          successCount["TC"]! += 1
          }
        case "TD":
        if resultArray["TD"] == "" {
          successCount["TD"]! += 1
          }
          default:
          break     
      } 
    } else if result == "ng" {
        switch test {
          case "TA":
          if resultArray["TA"] == "" {
            failureCount["TA"]! += 1
            }
          case "TB":
          if resultArray["TB"] == "" {
            failureCount["TB"]! += 1
            }
          case "TC":
          if resultArray["TC"] == "" {
            failureCount["TC"]! += 1
            }
          case "TD":
          if resultArray["TD"] == "" {
            failureCount["TD"]! += 1
            }
            default:
            break
        }
      }
      //視力ごとの正答数が２になったのを確認する。
      for (key, value) in successCount {
        if value == 2 {
          resultArray[key] = "ok"
        }
      }
      //視力ごとの失敗数が2になったのを確認する。
      for (key, value) in failureCount {
        if value == 2 {
          resultArray[key] = "ng"
        }
      }

}
var maxLevel = "E"
for level in ["TA", "TB", "TC", "TD"] {
    if resultArray[level]! == "ok" {
        maxLevel = level
        break
    }
}

if maxLevel == "TA" {
    print("A")
} else if maxLevel == "TB" {
    print("B")
} else if maxLevel == "TC" {
    print("C")
} else if maxLevel == "TD" {
    print("D")
} else {
    print("E")
}
