let input = readLine()!.split(separator: " ").map { Int($0)! }
let n = input[0]
let x = input[1]
let k = input[2]
var totalLeftCount = 0
// トータルで左端を通る回数
if k % 4 == 0 {
     totalLeftCount = k / 2
} else {
     totalLeftCount = (k - 1) / 2
}
//Xcm遠ざける前に左端を通る回数。
let leftCount = (4 * n) / 2

//Xcm遠ざけた後に通る回数
let longLeftCount = totalLeftCount - leftCount 

let extraDistance = longLeftCount * x 
print(extraDistance)
