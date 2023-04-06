// 入力値の取得
let X = Int(readLine()!)!
let fuels = readLine()!.split(separator: " ").map { Int($0)! } 
let fuel1 = fuels[0]
let fuel2 = fuels[1]
let distanceInformation =  readLine()!.split(separator: " ").map { Int($0)! } 
let L = distanceInformation[0]
let N = distanceInformation[1]
let stopPoints = readLine()!.split(separator: " ").map{ Int($0)! }

var totalFuel = 0  // 必要な燃料の初期値

// 発進からXmまでの燃料消費を計算
if(stopPoints[0] < X){
    totalFuel += fuel1 * stopPoints[0]
} else {
    totalFuel += fuel1 * X
}

// Xm走った後から停止地点までの燃料消費を計算
for i in 0..<N {
    var distance = 0 
    if i == 0 {
        distance = stopPoints[i] - X
        if(distance > 0){
        totalFuel += fuel2 * distance
        }
    } else {
        distance = stopPoints[i] - stopPoints[i - 1]
        if(distance < X) {
           totalFuel += fuel1 * distance
        } else {
           totalFuel += fuel1 * X + fuel2 * (distance - X)
        }
    }
    // let distance = i == 0 ? stopPoints[i] : stopPoints[i] - stopPoints[i-1]
    // totalFuel += fuel2 * distance
}

// 最後の停止地点からゴールまでの燃料消費を計算
if L - stopPoints[N-1] - X > 0 {
totalFuel += fuel1 * X + fuel2 * (L - stopPoints[N-1] - X)
} else {
    totalFuel += fuel1 * (L - stopPoints[N-1])
}
print(totalFuel)