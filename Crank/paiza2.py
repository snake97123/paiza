
h = int(input())
count = 0
p_damages = []
m_damages = []

while h > 0:
    count += 1
    if count <= 2:
        h -= 1
        p_damages.append(1)
        m_damages.append(1)
    else:
        p_damage = m_damages[count - 2] + m_damages[count - 3]
        m_damage = p_damages[count - 2] * 2 + p_damages[count - 3]
        h -= m_damage 
        p_damages.append(p_damage)
        m_damages.append(m_damage)

print(count)