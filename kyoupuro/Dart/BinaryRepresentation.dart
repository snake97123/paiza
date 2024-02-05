import 'dart:io';

void main() {
  int num = int.parse(stdin.readLineSync()!);
  String binaryRepresentation = num.toRadixString(2);
  int binaryRepresentationLength = binaryRepresentation.length;
  int zeroLength = 10 - binaryRepresentationLength;
  String zeroString = '0' * zeroLength;
  print(zeroString + binaryRepresentation);
}
