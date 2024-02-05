import 'dart:io';

void main() {
  int num = int.parse(stdin.readLineSync()!);
  int areaOfSquare = num * num;
  print(areaOfSquare);
}
