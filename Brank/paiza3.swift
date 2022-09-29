import  Foundation 

let stringClipRange = readLine()!.components(separatedBy: " ")
let startingPoint = Int(stringClipRange[0])!
let endPoint = Int(stringClipRange[1])!
let word: String = readLine()!
 
let start = word.index(word.startIndex, offsetBy: startingPoint - 1)   
let end = word.index(word.startIndex, offsetBy: endPoint - 1)     
let newWord = String(word[start...end])                
 
print(newWord)      
