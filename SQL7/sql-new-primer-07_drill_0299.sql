UPDATE menu SET price = FLOOR(price / 100) * 100;
SELECT * FROM menu;