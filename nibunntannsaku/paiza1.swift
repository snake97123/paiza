let n = Int(readLine()!)!
var numberList = readLine()!.split(separator: " ").map { Int($0)! }
let q = Int(readLine()!)!
let sortedNumberList = numberList.sorted()

func binary_search(A: [Int],n:Int, k: Int) -> Int {
    var left = 0 
    var right = n
    // print(right)
    while left < right {
        let mid = (left + right) / 2
        if A[mid] < k {
        left = mid + 1
        } else {
            right = mid
        }
        
    }
    return right
}

for _ in 0..<q{
    let inputNumber = readLine()!.split(separator: " ").map { Int($0)! }
    let left = inputNumber[0]
    let right = inputNumber[1]
    let lpos = binary_search(A:sortedNumberList, n:n, k:left)
    let rpos = binary_search(A:sortedNumberList, n:n, k:right + 1)
    print(rpos - lpos)
    }