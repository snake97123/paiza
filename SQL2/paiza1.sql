-- テーブルの結合 上から１０件取得
SELECT * FROM ordered INNER JOIN ordered_menu ON ordered.ordered_id = ordered_menu.ordered_id LIMIT 10;
