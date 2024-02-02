import 'dart:io';

void main() {
  int N = int.parse(stdin.readLineSync()!);
  String S = stdin.readLineSync()!;

  bool flag = checkAdjacentAB(N, S);

  if (flag) {
    print('Yes');
  } else {
    print('No');
  }
}

bool checkAdjacentAB(int N, String S) {
  for (int i = 0; i < N - 1; i++) {
    if ((S[i] == 'a' && S[i + 1] == 'b') || (S[i] == 'b' && S[i + 1] == 'a')) {
      return true;
    }
  }
  return false;
}
