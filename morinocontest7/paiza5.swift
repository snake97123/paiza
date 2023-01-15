let n = Int(readLine()!)!

if (n >= 35) {
    print("extremely hot day")
} else if (35 > n && n >= 30) {
    print("hot summer day")
} else if (30 > n && n >= 25) {
    print("summer day")
} else if ( 0 > n ) {
    print("ice day")
} else {
    print("normal day")
}