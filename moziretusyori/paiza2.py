from collections import OrderedDict

s = input()
print(''.join(OrderedDict.fromkeys(s)))