import 'dart:io';

void main() {
  List<int> inputInformation =
      stdin.readLineSync()!.split(' ').map((e) => int.parse(e)).toList();
  int arrayElementCount = inputInformation[0];
  int findingElement = inputInformation[1];

  List<int> array =
      stdin.readLineSync()!.split(' ').map((e) => int.parse(e)).toList();

  int left = 0;
  int right = arrayElementCount - 1;
  while (left <= right) {
    int mid = (left + right) ~/ 2;
    if (array[mid] == findingElement) {
      print(mid);
      break;
    } else if (array[mid] < findingElement) {
      left = mid + 1;
    } else {
      right = mid - 1;
    }
  }
}
