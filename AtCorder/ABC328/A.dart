import 'dart:io';

void main() {
  List<int> input =
      stdin.readLineSync()!.split(' ').map((e) => int.parse(e)).toList();
  int N = input[0];
  int X = input[1];

  List<int> scoreList =
      stdin.readLineSync()!.split(' ').map((e) => int.parse(e)).toList();
  int score = 0;
  for (int i = 0; i < N; i++) {
    if (scoreList[i] <= X) {
      score += scoreList[i];
    }
  }
  print(score);
}
