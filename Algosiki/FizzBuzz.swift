let N = Int(readLine()!)!

for i in 1...N {
    if i % 6 == 0 && i % 4 == 0 {
        print("FizzBuzz")
    } else if i % 6 == 0 {
        print("Buzz")
    } else if i % 4 == 0 {
        print("Fizz")
    } else {
        print(i)
    }
}