import 'dart:io';

void main() {
  int B = int.parse(stdin.readLineSync()!);

  int result = findA(B);
  print(result);
}

int findA(int B) {
  int low = 1;
  int high = 1000;
  while (low <= high) {
    int mid = (low + high) ~/ 2;
    BigInt midPower = BigInt.from(mid).pow(mid);
    if (midPower == BigInt.from(B)) {
      return mid;
    } else if (midPower < BigInt.from(B)) {
      low = mid + 1;
    } else {
      high = mid - 1;
    }
  }
  return -1;
}
