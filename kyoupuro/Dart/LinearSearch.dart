import 'dart:io';

void main() {
  List<int> inputInformation =
      stdin.readLineSync()!.split(' ').map((e) => int.parse(e)).toList();

  int N = inputInformation[0];
  int X = inputInformation[1];

  List<int> numberList =
      stdin.readLineSync()!.split(' ').map((e) => int.parse(e)).toList();
  bool flag = false;

  for (int i = 0; i < N; i++) {
    if (numberList[i] == X) {
      flag = true;
      break;
    }
  }

  if (flag) {
    print('Yes');
  } else {
    print('No');
  }
}
