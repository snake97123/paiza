import 'dart:io';
import 'dart:math';

void main() {
  int roomCount = int.parse(stdin.readLineSync()!);
  List<int> moveDurationList1 =
      stdin.readLineSync()!.split(' ').map((e) => int.parse(e)).toList();
  List<int> moveDurationList2 =
      stdin.readLineSync()!.split(' ').map((e) => int.parse(e)).toList();

  List<double> dp = List.filled(roomCount + 1, double.infinity);
  List<int> prev = List.filled(roomCount + 1, -1);
  dp[1] = 0.0;

  for (int i = 2; i <= roomCount; i++) {
    double costFromPrevRoom = dp[i - 1] + moveDurationList1[i - 2];
    if (costFromPrevRoom < dp[i]) {
      dp[i] = costFromPrevRoom;
      prev[i] = i - 1;
    }

    if (i > 2) {
      double costFromTwoRoomsBack = dp[i - 2] + moveDurationList2[i - 3];
      if (costFromTwoRoomsBack < dp[i]) {
        dp[i] = costFromTwoRoomsBack;
        prev[i] = i - 2;
      }
    }
  }

  List<int> path = [];
  for (int i = roomCount; i != -1; i = prev[i]) {
    path.add(i);
  }
  path = path.reversed.toList();

  print(path.length);
  print(path.join(' '));
}
