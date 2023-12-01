import 'dart:io';

void main() {
  var input = stdin.readLineSync()!.split(' ');
  int N = int.parse(input[0]);
  int L = int.parse(input[1]);
  int R = int.parse(input[2]);

  var A = stdin.readLineSync()!.split(' ').map((e) => int.parse(e)).toList();

  for (int i = 0; i < N; i++) {
    int X;
    if (A[i] < L) {
      X = L;
    } else if (A[i] > R) {
      X = R;
    } else {
      X = A[i];
    }
    stdout.write('$X${i < N - 1 ? ' ' : '\n'}');
  }
}
