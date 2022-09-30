import  Foundation 

let stringClipRange = readLine()!.components(separatedBy: " ")
let startingPoint = Int(stringClipRange[0])!
let endPoint = Int(stringClipRange[1])!
let word: String = readLine()!
var count = 0

for str in word {
    count += 1
    if count >= startingPoint && count <= endPoint {
        print(str.uppercased(), terminator:"")
    } else {
    
    print(str, terminator:"")
    
    }
}
