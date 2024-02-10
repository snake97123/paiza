import 'dart:io';

void main() {
  int eventDuration = int.parse(stdin.readLineSync()!);
  int attendance = int.parse(stdin.readLineSync()!);

  List<int> attendanceComparedToPreviousDay = List.filled(eventDuration + 1, 0);
  for (var i = 0; i < attendance; i++) {
    List<int> inputInformation =
        stdin.readLineSync()!.split(' ').map((e) => int.parse(e)).toList();
    int startDay = inputInformation[0];
    int endDay = inputInformation[1];
    attendanceComparedToPreviousDay[startDay - 1] += 1;
    attendanceComparedToPreviousDay[endDay] -= 1;
  }

  // Calculation of cumulative sums
  List<int> cumulativeSumList = [];
  int cumulativeSum = 0;
  for (int i = 0; i < eventDuration; i++) {
    cumulativeSum += attendanceComparedToPreviousDay[i];
    cumulativeSumList.add(cumulativeSum);
  }
  // Output the number of visitors for each day
  for (int i = 0; i < eventDuration; i++) {
    print(cumulativeSumList[i]);
  }
}
