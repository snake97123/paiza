# 累積和に関する問題を解いた。
N, Q = map(int, input().split())
admission_person_count_list = list(map(int, input().split()))
admission_total_person_list = [0] * (N + 1)

for i in range(N):
    admission_total_person_list[i + 1] = admission_total_person_list[i] + admission_person_count_list[i]

for _ in range(Q):
    L, R = map(int, input().split())
    print(admission_total_person_list[R] - admission_total_person_list[L - 1])


# 別問題の解答
# Atcoder Lottery
N = int(input())
A = list(map(int, input().split()))
Q = int(input())
total_win_count = [0] * (N + 1)
total_lose_count = [0] * (N + 1)

for i in range(N):
    if A[i] == 1:
        total_win_count[i + 1] += total_win_count[i] + 1
        total_lose_count[i + 1] = total_lose_count[i]
    else:
        total_lose_count[i + 1] += total_lose_count[i] + 1
        total_win_count[i + 1] += total_win_count[i]
        
for _ in range(Q):
    L, R = map(int, input().split())
    win_count = total_win_count[R] - total_win_count[L - 1]
    lose_count = total_lose_count[R] - total_lose_count[L - 1]
    
    if win_count > lose_count:
        print("win")
    elif win_count < lose_count:
        print("lose")
    else:
        print("draw")

# 別問題の解答
# Atcoder Event Attendance
D = int(input())
N = int(input())
each_date_participant_number = [0] * (D + 1)
total_each_date_participant_number = [0] * (D + 1)

for _ in range(N):
    L, R = map(int, input().split())
    each_date_participant_number[L] += 1
    if R != D:
        each_date_participant_number[R + 1] -= 1

total_each_date_participant_number[0] = each_date_participant_number[0]
for i in range(D):
    total_each_date_participant_number[i + 1] = total_each_date_participant_number[i] + each_date_participant_number[i + 1]
    
for i in range(D):
    print(total_each_date_participant_number[i + 1])