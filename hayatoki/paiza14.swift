var n = Int(readLine()!)!
for _ in 0..<10 {
   if n == 9 {
       print(n)
       n = 0
   } else {
      print(n)
       n += 1 
   }
}