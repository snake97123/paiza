func insertionSort(_ array: inout [Int], _ n: Int, _ h: Int) -> Int {
    var num_of_move = 0
    
    for i in h..<n {

        let x = array[i]

        var j = i-h

        while j >= 0 && array[j] > x {
            array[j+h] = array[j]
            j -= h
            num_of_move += 1
        }
        
        array[j+h] = x
    }
    
    return num_of_move
}



func shellSort(_ array: inout [Int], _ n: Int, _ gaps: [Int]) {
    var num_of_move = 0
    
    for h in gaps {
        num_of_move = insertionSort(&array, n, h)
        print(num_of_move)
    }
}

let n = Int(readLine()!)!
var array = readLine()!.split(separator: " ").map { Int($0)! }
let k = Int(readLine()!)!
let gaps = readLine()!.split(separator: " ").map { Int($0)! }

shellSort(&array, n, gaps)