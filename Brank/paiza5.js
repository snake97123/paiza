const readline = require('readline');
const rl = readline.createInterface({
  input: process.stdin,
  output: process.stdout
});

let n = 0;
let data = [];

rl.on('line', (input) => {
  if (n === 0) {
    n = parseInt(input);
  } else {
    const [s, d] = input.split(' ');
    data.push({s, d: parseInt(d)});
  }
 
  if (data.length === n) {
    data.sort((a, b) => a.d - b.d);
    data.forEach(({s}) => console.log(s));
    rl.close();
  }
});