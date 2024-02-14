import 'dart:io';

void main() {
  List<int> inputInformation =
      stdin.readLineSync()!.split(' ').map((e) => int.parse(e)).toList();
  int printerCount = inputInformation[0];
  int printerNumber = inputInformation[1];
  List<int> timeSpentInPrinting =
      stdin.readLineSync()!.split(' ').map((e) => int.parse(e)).toList();

  int left = 1;
  int right = 1000000000;
  while (left < right) {
    int mid = (left + right) ~/ 2;
    int printedPage = 0;
    for (int i = 0; i < printerCount; i++) {
      printedPage += mid ~/ timeSpentInPrinting[i];
    }
    if (printedPage >= printerNumber) {
      right = mid;
    } else {
      left = mid + 1;
    }
  }

  print(right);
}
