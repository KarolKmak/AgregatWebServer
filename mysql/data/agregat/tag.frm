TYPE=VIEW
query=select `m`.`ID_tag` AS `ID_tag`,`m`.`Name` AS `tag_name`,`e`.`ID_tag` AS `Parrent_tag_ID`,`e`.`Name` AS `parrent_tag` from (`agregat`.`tags` `m` join `agregat`.`tags` `e`) where (`m`.`Parrent_tag_ID` = `e`.`ID_tag`)
md5=c1e9208372a683aaace8c0a309094c16
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=1
with_check_option=0
timestamp=2022-01-19 17:53:05
create-version=1
source=select `m`.`ID_tag` AS `ID_tag`,`m`.`Name` AS `tag_name`,`e`.`ID_tag` AS `Parrent_tag_ID`,`e`.`Name` AS `parrent_tag` from (`tags` `m` join `tags` `e`) where (`m`.`Parrent_tag_ID` = `e`.`ID_tag`)
client_cs_name=utf8
connection_cl_name=utf8_general_ci
view_body_utf8=select `m`.`ID_tag` AS `ID_tag`,`m`.`Name` AS `tag_name`,`e`.`ID_tag` AS `Parrent_tag_ID`,`e`.`Name` AS `parrent_tag` from (`agregat`.`tags` `m` join `agregat`.`tags` `e`) where (`m`.`Parrent_tag_ID` = `e`.`ID_tag`)
