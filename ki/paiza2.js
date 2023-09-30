process.stdin.resume();
process.stdin.setEncoding('utf8');

var lines = [];
var reader = require('readline').createInterface({
  input: process.stdin,
  output: process.stdout
});
reader.on('line', (line) => {
  lines.push(line);
});
reader.on('close', () => {
  const N = lines[0];
  const adj = [];
  for(let i = 1; i < N; i++) {
    const [a, b] = lines[i].split(" ").map(Number);
    if(!adj[a]) {
      adj[a] = [];
    }
    if(!adj[b]) {
      adj[b] = [];
    }
    adj[a].push(b);
    adj[b].push(a);
  }
  adj.forEach(row => {
     console.log(row.sort((a, b) => a - b).join(' '));
  });
});



