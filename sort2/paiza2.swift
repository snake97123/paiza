
let n = Int(readLine()!)!
var array = readLine()!.split(separator: " ").map { Int($0)! }

var count = 0

func quickSort(_ A: inout [Int], left: Int, right: Int) {
    if left + 1 >= right {
        return
    }

    let pivot = A[right - 1]
    var cur_index = left

    for i in left..<right - 1 {
        if A[i] < pivot {
            A.swapAt(cur_index, i)
            cur_index += 1
            count += 1
            
        }
    }

    A.swapAt(cur_index, right - 1)
    quickSort(&A, left: left, right: cur_index)
    quickSort(&A, left: cur_index + 1, right: right)
}


quickSort(&array, left: 0, right: n)

print(array.map { String($0) }.joined(separator: " "))
print(count)