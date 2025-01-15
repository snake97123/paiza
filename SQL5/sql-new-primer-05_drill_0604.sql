SELECT 
    o.ordered_id,
    o.bill
FROM 
    ordered o
JOIN 
    ordered_menu om ON o.ordered_id = om.ordered_id
GROUP BY 
    o.ordered_id, o.bill
HAVING 
    SUM(om.num) >= 5
    AND o.bill <= 1000;

-- 処理の流れの説明
-- 1. orderedテーブルとordered_menuテーブルをordered_idで結合する
-- 2. ordered_idとbillを取得する
-- 3. ordered_idとbillでグループ化する
-- 4. numの合計が5以上で、billが1000以下のデータを取得する
