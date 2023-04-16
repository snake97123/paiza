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
  
var s = lines[0];
var t = lines[1];

var count = 0;

for (var i = 0; i < t.length; i++) {
  var sub = t.substring(i, i + s.length);
  if (sub === s) {
    count++;
  }
}
console.log(count);
});