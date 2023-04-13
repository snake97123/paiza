let input = require("fs").readFileSync("/dev/stdin", "utf8");
let numbers = input.split("\n");
let sum = 0;

for (let i = 0; i < numbers[0]; i++) {
    let number = Number(numbers[i + 1]);
    if(number >= 5) {
        
        sum += number
    }
}

console.log(sum)