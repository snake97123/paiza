judge_lists = [False] * 4
for i in range(5):
    m = int(input())
    if m != 0:
        judge_lists[m - 1] = True
if False in judge_lists:
    print('No')
else:
    print('Yes')
