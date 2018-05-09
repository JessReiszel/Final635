delimiter $$
drop procedure if exists getinventoryyy;

create procedure getinventoryyy()
begin
 select inventory.iid as "ID", item_info.itemname as "Name", inventory.iavailable as "Availability", inventory.icondition as "Condition", item_info.itemprice as "Price" from inventory join item_info on inventory.itype=item_info.itemid order by inventory.iid;


end $$
delimiter ;
