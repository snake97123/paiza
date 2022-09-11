let noiseValue = Int(readLine()!)!

if noiseValue < 30 {
    print("quiet")
} else if noiseValue >= 30 && noiseValue < 50 {
    print("normal")
} else if noiseValue >= 50 && noiseValue < 70 {
    print("noisy")
} else if 70 <= noiseValue {
    print("very noisy")