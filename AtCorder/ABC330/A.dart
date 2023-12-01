import 'dart:io';

void main() {
  var input = stdin.readLineSync()!.split(' ');
  int N = int.parse(input[0]);
  int K = int.parse(input[1]);

  var scores =
      stdin.readLineSync()!.split(' ').map((e) => int.parse(e)).toList();
  int passCount = scores.where((score) => score >= K).length;

  print(passCount);
}
