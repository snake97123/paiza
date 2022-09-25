var hp = Int(readLine()!)!

var paizaAttackPower = [Int](repeating: 0, count: 1000) 
var enemyAttackPower = [Int](repeating: 0, count: 1000) 

paizaAttackPower[1] = 1 
paizaAttackPower[2] = 1
enemyAttackPower[1] = 1
enemyAttackPower[2] = 1

hp -= 2
var attackCount = 2

while hp > 0 {
    attackCount += 1 
    let paizaAttack = enemyAttackPower[attackCount - 1] + enemyAttackPower[attackCount - 2]
    let enemyAttack = paizaAttackPower[attackCount - 1] * 2 + paizaAttackPower[attackCount - 2]
    paizaAttackPower[attackCount] = paizaAttack
    enemyAttackPower[attackCount] = enemyAttack
    hp -= enemyAttack 
}

print(attackCount)