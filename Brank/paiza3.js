process.stdin.resume();
process.stdin.setEncoding('utf8');

//大文字にする関数の作成
function capitalizeSubstring(startIndex, endIndex, str) {
  let capitalizedStr = '';
  
  for (let i = 0; i < str.length; i++) {
    if (i >= startIndex - 1 && i < endIndex) {
      capitalizedStr += str[i].toUpperCase();
    } else {
      capitalizedStr += str[i];
    }
  }
  
  return capitalizedStr;
}
//入力値の受け取り
let input = require("fs").readFileSync("/dev/stdin", "utf8");
const [startIndex, endIndex] = input.split('\n')[0].split(' ').map(num => parseInt(num));
const str = input.split('\n')[1];

console.log(capitalizeSubstring(startIndex, endIndex, str));