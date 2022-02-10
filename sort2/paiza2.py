n = int(input())

datas = list(map(int, input().split()))


def merge_sort(datas):
    if len(datas) <= 1:
        return datas
    
    mid = len(datas) // 2
    left = merge_sort(datas[:mid])
    right = merge_sort(datas[mid:])
    
    return merge(left, right)
    
def merge(left, right):
   
    
    result = []
    i,j = 0,0
    
    while i < len(left) and j < len(right):
        if left[i] <= right[j]:
            result.append(left[i])
            i += 1
            
        else:
            result.append(right[j])
            j += 1
            
            
            
    if i < len(left):
        result.extend(left[i:])
        
        
    if j < len(right):
        result.extend(right[j:])
       
       
    return result
        

print(*merge_sort(datas))
