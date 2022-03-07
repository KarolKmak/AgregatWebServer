TYPE=VIEW
query=select `agregat`.`sugested_articles`.`Importance` AS `Importance`,`agregat`.`sugested_articles`.`Importance_change` AS `Importance_change`,`agregat`.`agregats`.`Name` AS `agregat_name`,`agregat`.`agregats`.`Description` AS `agregat_description`,`agregat`.`articles`.`Adress` AS `Adress`,`agregat`.`articles`.`Title` AS `Title`,`agregat`.`articles`.`Description` AS `title_description`,`agregat`.`sugested_articles`.`User_ID` AS `User_ID`,`agregat`.`sugested_articles`.`Agregat_ID` AS `Agregat_ID`,`agregat`.`sugested_articles`.`Article_ID` AS `Article_ID`,`agregat`.`sugested_articles`.`ID_sugested_article` AS `ID_sugested_article` from ((`agregat`.`sugested_articles` join `agregat`.`agregats`) join `agregat`.`articles`) where ((`agregat`.`sugested_articles`.`Agregat_ID` = `agregat`.`agregats`.`ID_agregat`) and (`agregat`.`sugested_articles`.`Article_ID` = `agregat`.`articles`.`ID_article`))
md5=cc769c571a3eea313415c8b2d2fd63e9
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=1
with_check_option=0
timestamp=2022-03-07 15:49:53
create-version=1
source=select `agregat`.`sugested_articles`.`Importance` AS `Importance`,\n`agregat`.`sugested_articles`.`Importance_change` AS `Importance_change`,\n`agregat`.`agregats`.`Name` AS `agregat_name`,\n`agregat`.`agregats`.`Description` AS `agregat_description`,\n`agregat`.`articles`.`Adress` AS `Adress`,\n`agregat`.`articles`.`Title` AS `Title`,\n`agregat`.`articles`.`Description` AS `title_description`,\n`agregat`.`sugested_articles`.`User_ID` AS `User_ID`,\n`agregat`.`sugested_articles`.`Agregat_ID` AS `Agregat_ID`,\n`agregat`.`sugested_articles`.`Article_ID` AS `Article_ID`,\n`agregat`.`sugested_articles`.`ID_sugested_article` AS `ID_sugested_article`\n from ((`agregat`.`sugested_articles` join `agregat`.`agregats`) join `agregat`.`articles`) where ((`agregat`.`sugested_articles`.`Agregat_ID` = `agregat`.`agregats`.`ID_agregat`) and (`agregat`.`sugested_articles`.`Article_ID` = `agregat`.`articles`.`ID_article`))
client_cs_name=utf8
connection_cl_name=utf8_general_ci
view_body_utf8=select `agregat`.`sugested_articles`.`Importance` AS `Importance`,`agregat`.`sugested_articles`.`Importance_change` AS `Importance_change`,`agregat`.`agregats`.`Name` AS `agregat_name`,`agregat`.`agregats`.`Description` AS `agregat_description`,`agregat`.`articles`.`Adress` AS `Adress`,`agregat`.`articles`.`Title` AS `Title`,`agregat`.`articles`.`Description` AS `title_description`,`agregat`.`sugested_articles`.`User_ID` AS `User_ID`,`agregat`.`sugested_articles`.`Agregat_ID` AS `Agregat_ID`,`agregat`.`sugested_articles`.`Article_ID` AS `Article_ID`,`agregat`.`sugested_articles`.`ID_sugested_article` AS `ID_sugested_article` from ((`agregat`.`sugested_articles` join `agregat`.`agregats`) join `agregat`.`articles`) where ((`agregat`.`sugested_articles`.`Agregat_ID` = `agregat`.`agregats`.`ID_agregat`) and (`agregat`.`sugested_articles`.`Article_ID` = `agregat`.`articles`.`ID_article`))
