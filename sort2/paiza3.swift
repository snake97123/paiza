import Foundation 

var count = 0

let n = Int(readLine()!)!
var array = readLine()!.split(separator: " ").map { Int($0)! }

mergeSort(&array, left: 0, right: array.count)

print(array.map { String($0) }.joined(separator: " "))
print(count)

func mergeSort(_ A: inout[Int], left: Int, right: Int) {
    if left + 1 < right {
        let mid = (left + right) / 2
        mergeSort(&A, left: left, right: mid)
        mergeSort(&A, left: mid, right: right)
        merge(&A, left: left, mid: mid, right: right)
    }
}

func merge(_ A: inout [Int], left: Int, mid: Int, right: Int) {
    var L = Array(A[left..<mid])
    var R = Array(A[mid..<right])
    
    L.append(Int.max)
    R.append(Int.max)
    
    var lIndex = 0
    var rIndex = 0

    for i in left..<right {
        if L[lIndex] < R[rIndex] {
            A[i] = L[lIndex]
            lIndex += 1
        } else {
            A[i] = R[rIndex]
            rIndex += 1
            count += 1
        }
    }
}