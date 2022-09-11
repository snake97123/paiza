let oneHole = ["A", "D", "O", "P", "Q", "R"]
let twoHole = ["B"]
let str = readLine()!

if twoHole.contains(str) {
    print(2)
} else if oneHole.contains(str) {
    print(1)
} else {
    print(0)
}
