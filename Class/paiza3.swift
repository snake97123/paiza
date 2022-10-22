import Foundation

struct User {
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
var users = [User]()

for _ in 0..<n {
let userInformation = readLine()!.components(separatedBy: " ")
users.append(User(nickname: userInformation[0], old: Int(userInformation[1])!, birth: userInformation[2], state: userInformation[3]))
}

let sortedByOldUsers = users.sorted(by: {
    $0.old! < $1.old!
})

for user in sortedByOldUsers {
    print("\(user.nickname!) \(user.old!) \(user.birth!) \(user.state!)")
}