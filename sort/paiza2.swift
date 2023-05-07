func selectionSort(_ n: Int, _ array: inout [Int]){
    for i in 0..<n - 1 {
        var minIndex = i 
        for j in i + 1..<n {
            if array[j] < array[minIndex] {
                minIndex = j 
            }
        }
        if i != minIndex {
            array.swapAt(i, minIndex)
        }
        print(array.map{ String($0) }.joined(separator: " "))

    }
}

let n = Int(readLine()!)!
var array = readLine()!.split(separator: " ").map{ Int($0)! }

selectionSort(n, &array)