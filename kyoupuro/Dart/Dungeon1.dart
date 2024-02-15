import 'dart:io';
import 'dart:math';

void main() {
  int roomCount = int.parse(stdin.readLineSync()!);
  List<int> moveDurationList1 =
      stdin.readLineSync()!.split(' ').map((e) => int.parse(e)).toList();
  List<int> moveDurationList2 =
      stdin.readLineSync()!.split(' ').map((e) => int.parse(e)).toList();
  List<int> minDurationList = List.filled(roomCount, 0);
  minDurationList[0] = 0;
  minDurationList[1] = moveDurationList1[0];
  for (int i = 2; i < roomCount; i++) {
    minDurationList[i] = min(minDurationList[i - 1] + moveDurationList1[i - 1],
        minDurationList[i - 2] + moveDurationList2[i - 2]);
  }
  print(minDurationList[roomCount - 1]);
}
