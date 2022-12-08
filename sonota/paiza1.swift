let input1 = Int(readLine()!)!
let input2 = readLine()!
let input3 = readLine()!
let input4 = readLine()!
let input5 = readLine()!

if input1 > 0 {
    print("plus")
} else {
    print(input1)
}

if input2 == "hoge" {
    print("yes")
} else {
    print(input2)
}

if input3.count == 10 {
    print("ten")
} else {
    print(input3)
}

if input4.firstIndex(of: "x") != nil {
    print(input4.firstIndex(of: "x")!.utf16Offset(in: input4))
} else {
    print("nothing")
}


if input5.firstIndex(of: "e") != nil {
    if input5.firstIndex(of: "e")!.utf16Offset(in: input5) == 4 {
      print("five")   
    } else {
        print(input5.prefix(1))
    }
} else {
    print(input5.prefix(1))
}