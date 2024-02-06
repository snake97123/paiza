import 'dart:io';

void main() {
  List<int> inputInformation =
      stdin.readLineSync()!.split(' ').map((e) => int.parse(e)).toList();
  int N = inputInformation[0];
  int Q = inputInformation[1];

  List<int> visitorCountNumbaerList =
      stdin.readLineSync()!.split(' ').map((e) => int.parse(e)).toList();

  // Calculation of cumulative sums
  List<int> cumulativeSumList = [];
  int cumulativeSum = 0;
  for (int i = 0; i < N; i++) {
    cumulativeSum += visitorCountNumbaerList[i];
    cumulativeSumList.add(cumulativeSum);
  }

  //find the number of visitors for each query
  for (int i = 0; i < Q; i++) {
    List<int> queryInformation =
        stdin.readLineSync()!.split(' ').map((e) => int.parse(e)).toList();
    int L = queryInformation[0];
    int R = queryInformation[1];

    if (L == 1) {
      print(cumulativeSumList[R - 1]);
    } else {
      print(cumulativeSumList[R - 1] - cumulativeSumList[L - 2]);
    }
  }
}
