process.stdin.resume();
process.stdin.setEncoding('utf8');
// 自分の得意な言語で
// Let's チャレンジ！！
var lines = [];
var reader = require('readline').createInterface({
  input: process.stdin,
  output: process.stdout
});
reader.on('line', (line) => {
  lines.push(line);
});

reader.on('close', () => {
  const N = parseInt(lines[0], 10);
  let graph = create2DArray(N, N);

  for(let i = 1; i <= N-1; i++) {
    const [a, b] = lines[i].split(' ').map(Number);
    graph[a-1][b-1] = 1;
    graph[b-1][a-1] = 1;
  }

  graph.forEach(row => {
    console.log(row.join(' '));
  });
});

function create2DArray(rows, cols) {
  let arr = [];
  for(let i = 0; i < rows; i++) {
    let row = Array(cols).fill(0);
    arr.push(row);
  }
  return arr;
}
