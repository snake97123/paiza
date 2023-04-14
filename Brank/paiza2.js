const readline = require('readline');
const reader = readline.createInterface({
  input: process.stdin,
  output: process.stdout
});
let lines = []; 
reader.on('line', (line) => {
  lines.push(line); 
});
reader.on('close', () => {
  let N = parseInt(lines[0]);
  let sum = 0; 
  for (let i = 1; i <= N; i++) {
    let number1 = parseInt(lines[i].split(" ")[0]);
    let number2 = parseInt(lines[i].split(" ")[1]);
    if (number1 !== number2) {
      sum += number1 + number2;
    }
    else {
      sum += number1 * number2;
    }
  }
  console.log(sum);
});
