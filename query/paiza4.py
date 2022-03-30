
N, K = map(int, input().split())

name_list = [input() for i in range(N)]
chronology =[0] * K

for i in range(K):
  year, name = input().split()
  year = int(year)
  chronology[i] = (year, name)

for year, name in sorted(chronology):
    print(name)

    