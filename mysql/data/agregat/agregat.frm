TYPE=VIEW
query=select `agregat`.`sugested_articles`.`Importance` AS `Importance`,`agregat`.`sugested_articles`.`Importance_change` AS `Importance_change`,`agregat`.`agregats`.`Name` AS `agregat_name`,`agregat`.`agregats`.`Description` AS `agregat_description`,`agregat`.`articles`.`Adress` AS `Adress`,`agregat`.`articles`.`Title` AS `Title`,`agregat`.`articles`.`Description` AS `title_description`,`agregat`.`tags`.`Name` AS `tag_name`,`agregat`.`sugested_articles`.`User_ID` AS `User_ID`,`agregat`.`sugested_articles`.`Agregat_ID` AS `Agregat_ID`,`agregat`.`sugested_articles`.`Article_ID` AS `Article_ID`,`agregat`.`sugested_articles`.`ID_sugested_article` AS `ID_sugested_article` from (((`agregat`.`sugested_articles` join `agregat`.`agregats`) join `agregat`.`articles`) join `agregat`.`tags`) where ((`agregat`.`sugested_articles`.`Agregat_ID` = `agregat`.`agregats`.`ID_agregat`) and (`agregat`.`sugested_articles`.`Article_ID` = `agregat`.`articles`.`ID_article`) and (`agregat`.`sugested_articles`.`Tag_ID` = `agregat`.`tags`.`ID_tag`))
md5=ec3f4e42ea6544b4d02772f2f0190a64
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=1
with_check_option=0
timestamp=2022-01-24 21:33:06
create-version=1
source=select 
client_cs_name=utf8
connection_cl_name=utf8_general_ci
view_body_utf8=select `agregat`.`sugested_articles`.`Importance` AS `Importance`,`agregat`.`sugested_articles`.`Importance_change` AS `Importance_change`,`agregat`.`agregats`.`Name` AS `agregat_name`,`agregat`.`agregats`.`Description` AS `agregat_description`,`agregat`.`articles`.`Adress` AS `Adress`,`agregat`.`articles`.`Title` AS `Title`,`agregat`.`articles`.`Description` AS `title_description`,`agregat`.`tags`.`Name` AS `tag_name`,`agregat`.`sugested_articles`.`User_ID` AS `User_ID`,`agregat`.`sugested_articles`.`Agregat_ID` AS `Agregat_ID`,`agregat`.`sugested_articles`.`Article_ID` AS `Article_ID`,`agregat`.`sugested_articles`.`ID_sugested_article` AS `ID_sugested_article` from (((`agregat`.`sugested_articles` join `agregat`.`agregats`) join `agregat`.`articles`) join `agregat`.`tags`) where ((`agregat`.`sugested_articles`.`Agregat_ID` = `agregat`.`agregats`.`ID_agregat`) and (`agregat`.`sugested_articles`.`Article_ID` = `agregat`.`articles`.`ID_article`) and (`agregat`.`sugested_articles`.`Tag_ID` = `agregat`.`tags`.`ID_tag`))