// three numbers(a b c) are given. print max value and min value
// input: 1 2 3
// output: 3 1
let inputNumbers = readLine()!.split(separator: " ").map { Int($0)! }
let maxNumber = inputNumbers.max()!
let minNumber = inputNumbers.min()!
print(maxNumber, minNumber)
