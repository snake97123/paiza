# 累積和に関する問題を解いた。
N, Q = map(int, input().split())
admission_person_count_list = list(map(int, input().split()))
admission_total_person_list = [0] * (N + 1)

for i in range(N):
    admission_total_person_list[i + 1] = admission_total_person_list[i] + admission_person_count_list[i]

for _ in range(Q):
    L, R = map(int, input().split())
    print(admission_total_person_list[R] - admission_total_person_list[L - 1])