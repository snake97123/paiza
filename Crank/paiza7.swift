var hp = Int(readLine()!)!

var paizaAttackPower = [Int](repeating: 0, count: 1000) 
var enemyAttackPower = [Int](repeating: 0, count: 1000) 
var attackCount = 0

while hp > 0 {
     if attackCount < 2 {
        attackCount  += 1
        paizaAttackPower[attackCount] = 1
        enemyAttackPower[attackCount] = 1
        hp -= 1
     } else {
        attackCount += 1 
        let paizaAttack = enemyAttackPower[attackCount - 1] + enemyAttackPower[attackCount - 2]
        let enemyAttack = paizaAttackPower[attackCount - 1] * 2 + paizaAttackPower[attackCount - 2]
        paizaAttackPower[attackCount] = paizaAttack
        enemyAttackPower[attackCount] = enemyAttack
        hp -= enemyAttack 
    }
    
}

print(attackCount)