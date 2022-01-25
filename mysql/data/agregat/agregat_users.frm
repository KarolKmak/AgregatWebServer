TYPE=VIEW
query=select `agregat`.`users`.`ID_user` AS `ID_user`,`agregat`.`users`.`Username` AS `Username`,`agregat`.`agregats`.`ID_agregat` AS `ID_agregat`,`agregat`.`agregats`.`Name` AS `Name`,`agregat`.`agregats`.`Description` AS `Description` from ((`agregat`.`users` join `agregat`.`users-agregats`) join `agregat`.`agregats`) where ((`agregat`.`users`.`ID_user` = `agregat`.`users-agregats`.`User_ID`) and (`agregat`.`agregats`.`ID_agregat` = `agregat`.`users-agregats`.`Agregat_ID`))
md5=4c1e0b946b2bc8c231858ac08e75a0d3
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=1
with_check_option=0
timestamp=2022-01-25 19:57:09
create-version=1
source=select\n`users`.`ID_user` AS `ID_user`,\n`users`.`Username` AS `Username`,\n`agregats`.`ID_agregat` AS `ID_agregat`,\n`agregats`.`Name` AS `Name`,\n`agregats`.`Description` AS `Description`\n\n\nfrom ((`users` join `users-agregats`) join `agregats`) where ((`users`.`ID_user` = `users-agregats`.`User_ID`) and (`agregats`.`ID_agregat` = `users-agregats`.`Agregat_ID`))
client_cs_name=utf8
connection_cl_name=utf8_general_ci
view_body_utf8=select `agregat`.`users`.`ID_user` AS `ID_user`,`agregat`.`users`.`Username` AS `Username`,`agregat`.`agregats`.`ID_agregat` AS `ID_agregat`,`agregat`.`agregats`.`Name` AS `Name`,`agregat`.`agregats`.`Description` AS `Description` from ((`agregat`.`users` join `agregat`.`users-agregats`) join `agregat`.`agregats`) where ((`agregat`.`users`.`ID_user` = `agregat`.`users-agregats`.`User_ID`) and (`agregat`.`agregats`.`ID_agregat` = `agregat`.`users-agregats`.`Agregat_ID`))
