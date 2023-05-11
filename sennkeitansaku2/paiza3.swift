import Foundation 

let input = readLine()!.split(separator: " ").map { Int($0)! }
let (n, m) = (input[0], input[1])

let a = readLine()!.split(separator: " ").map { Int($0)! } 
let b = readLine()!.split(separator: " ").map { Int($0)! }

var indexA = 0 
var indexB = 0 

 while indexA < n && indexB < m {
        if a[indexA] == b[indexB] {
            indexB += 1
        }
        indexA += 1
    }

    let result = indexB == m ? "Yes" : "No"
    
print(result)