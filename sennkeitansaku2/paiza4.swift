import Foundation

func filterRowsByColumnValue(n: Int, m: Int, columnIndex: Int, threshold: Int) -> [String] {
    var filteredRows: [String] = []
    
    for _ in 0..<n {
        let row = readLine()!.split(separator: ",").map { Int($0)! }
        if row[columnIndex - 1] >= threshold {
            let rowWithComma = row.map { String($0) }.joined(separator: ",")
            filteredRows.append(rowWithComma)
        }
    }
    return filteredRows
}

let input = readLine()!.split(separator: " ").map { Int($0)! }
let (n, m, columnIndex, threshold) = (input[0], input[1], input[2], input[3])

let result = filterRowsByColumnValue(n: n, m: m, columnIndex: columnIndex, threshold: threshold)
result.forEach {
    print($0)
}