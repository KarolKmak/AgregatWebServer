TYPE=VIEW
query=select `agregat`.`sugested_articles`.`Importance` AS `Importance`,`agregat`.`sugested_articles`.`Importance_change` AS `Importance_change`,`agregat`.`agregats`.`Name` AS `agregat_name`,`agregat`.`agregats`.`Description` AS `agregat_description`,`agregat`.`articles`.`Adress` AS `Adress`,`agregat`.`articles`.`Title` AS `Title`,`agregat`.`articles`.`Description` AS `article_description`,`agregat`.`users`.`Username` AS `Username`,`agregat`.`users`.`ID_user` AS `User_ID`,`agregat`.`sugested_articles`.`ID_sugested_article` AS `ID_sugested_Article`,`agregat`.`agregats`.`ID_agregat` AS `Agregat_ID` from (((`agregat`.`sugested_articles` join `agregat`.`agregats`) join `agregat`.`articles`) join `agregat`.`users`) where ((`agregat`.`sugested_articles`.`Agregat_ID` = `agregat`.`agregats`.`ID_agregat`) and (`agregat`.`sugested_articles`.`Article_ID` = `agregat`.`articles`.`ID_article`) and (`agregat`.`sugested_articles`.`User_ID` = `agregat`.`users`.`ID_user`))
md5=cbf916b6f3c8e6376aa08133d6cc8ba2
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=1
with_check_option=0
timestamp=2022-03-08 19:42:02
create-version=1
source=select `sugested_articles`.`Importance` AS `Importance`,`sugested_articles`.`Importance_change` AS `Importance_change`,`agregats`.`Name` AS `agregat_name`,`agregats`.`Description` AS `agregat_description`,`articles`.`Adress` AS `Adress`,`articles`.`Title` AS `Title`,`articles`.`Description` AS `article_description`,`users`.`Username` AS `Username`,`users`.`ID_user` AS `User_ID`,\n`sugested_articles`.`ID_sugested_article` AS `ID_sugested_Article`,\n`agregats`.`ID_agregat` AS `Agregat_ID`\nfrom (((`sugested_articles` join `agregats`) join `articles`) join `users`) where ((`sugested_articles`.`Agregat_ID` = `agregats`.`ID_agregat`) and (`sugested_articles`.`Article_ID` = `articles`.`ID_article`) and (`sugested_articles`.`User_ID` = `users`.`ID_user`))
client_cs_name=utf8
connection_cl_name=utf8_general_ci
view_body_utf8=select `agregat`.`sugested_articles`.`Importance` AS `Importance`,`agregat`.`sugested_articles`.`Importance_change` AS `Importance_change`,`agregat`.`agregats`.`Name` AS `agregat_name`,`agregat`.`agregats`.`Description` AS `agregat_description`,`agregat`.`articles`.`Adress` AS `Adress`,`agregat`.`articles`.`Title` AS `Title`,`agregat`.`articles`.`Description` AS `article_description`,`agregat`.`users`.`Username` AS `Username`,`agregat`.`users`.`ID_user` AS `User_ID`,`agregat`.`sugested_articles`.`ID_sugested_article` AS `ID_sugested_Article`,`agregat`.`agregats`.`ID_agregat` AS `Agregat_ID` from (((`agregat`.`sugested_articles` join `agregat`.`agregats`) join `agregat`.`articles`) join `agregat`.`users`) where ((`agregat`.`sugested_articles`.`Agregat_ID` = `agregat`.`agregats`.`ID_agregat`) and (`agregat`.`sugested_articles`.`Article_ID` = `agregat`.`articles`.`ID_article`) and (`agregat`.`sugested_articles`.`User_ID` = `agregat`.`users`.`ID_user`))
