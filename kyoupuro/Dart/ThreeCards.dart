import 'dart:io';

void main() {
  List<int> inputInformation =
      stdin.readLineSync()!.split(' ').map((e) => int.parse(e)).toList();
  int N = inputInformation[0];
  int K = inputInformation[1];
  int count = 0;

  for (int i = 1; i <= N; i++) {
    for (int j = 1; j <= N; j++) {
      int lastCard = K - (i + j);
      if (lastCard > 0 && lastCard <= N) {
        count++;
      }
    }
  }
  print(count);
}
