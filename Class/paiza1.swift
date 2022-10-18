import Foundation

class User {
    let nickname: String?
    let old: Int?
    let birth: String?
    let state: String?
    
    init(nickname: String, old: Int, birth: String, state: String) {
        self.nickname = nickname
        self.old = old
        self.birth = birth
        self.state = state
    }
}
let n = Int(readLine()!)!

for _ in 0..<n {
let userInformation = readLine()!.components(separatedBy: " ")
let user = User(nickname: userInformation[0], old: Int(userInformation[1])!, birth: userInformation[2], state: userInformation[3])
print("User{")
print("nickname : \(user.nickname!)")
print("old : \(user.old!)")
print("birth : \(user.birth!)")
print("state : \(user.state!)")
print("}")
}