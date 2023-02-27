import Foundation

let inputNumber = readLine()!.split(separator: " ").map { Double($0)! }
let n = inputNumber[0]
let k = inputNumber[1]

let pipeLongList = readLine()!.split(separator: " ").map { Double($0)! }

var left = 0.0
// 1 ≦ A_i ≦ 10,000 から最大値の設定を行った。
var right = 10001.0
var mid = 0.0
for _ in 0..<100 {
  mid = (left + right) / 2.0
  var numOfPipe = 0.0
  for i in pipeLongList {
    if i / mid >= 1 {
      let tmp = i / mid
      numOfPipe += floor(tmp)
    }
  }
  if numOfPipe < k {
    right = mid
  } else {
    left = mid
  }
}

print(mid)
