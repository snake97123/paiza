INSERT INTO ordered_menu (ordered_id, menu_id, num, sum)
VALUES (441,  2, 1, 250),
       (441, 11, 1, 250),
       (441, 20, 1, 250),  
       (442,  8, 1, 350),  
       (442, 12, 1, 300),  
       (442, 27, 1, 300);  
      
SELECT * FROM ordered_menu WHERE ordered_id >= 430;