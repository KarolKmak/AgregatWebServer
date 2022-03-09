TYPE=VIEW
query=select `agregat`.`users`.`Username` AS `Username`,`agregat`.`agregats`.`Name` AS `Name`,`agregat`.`agregats`.`Description` AS `Description`,`agregat`.`users-agregats`.`Role` AS `Role`,`agregat`.`agregats`.`ID_agregat` AS `ID_agregat`,`agregat`.`users`.`ID_user` AS `ID_user` from ((`agregat`.`users` join `agregat`.`users-agregats`) join `agregat`.`agregats`) where ((`agregat`.`users`.`ID_user` = `agregat`.`users-agregats`.`User_ID`) and (`agregat`.`agregats`.`ID_agregat` = `agregat`.`users-agregats`.`Agregat_ID`))
md5=f71e2c1264a7ac760cb6ac66311e9c71
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=1
with_check_option=0
timestamp=2022-03-08 19:37:04
create-version=1
source=select `users`.`Username` AS `Username`,`agregats`.`Name` AS `Name`,`agregats`.`Description` AS `Description`,`users-agregats`.`Role` AS `Role`,\n`agregats`.`ID_agregat` AS `ID_agregat`,\n`users`.`ID_user` AS `ID_user`\nfrom ((`users` join `users-agregats`) join `agregats`) where ((`users`.`ID_user` = `users-agregats`.`User_ID`) and (`agregats`.`ID_agregat` = `users-agregats`.`Agregat_ID`))
client_cs_name=utf8
connection_cl_name=utf8_general_ci
view_body_utf8=select `agregat`.`users`.`Username` AS `Username`,`agregat`.`agregats`.`Name` AS `Name`,`agregat`.`agregats`.`Description` AS `Description`,`agregat`.`users-agregats`.`Role` AS `Role`,`agregat`.`agregats`.`ID_agregat` AS `ID_agregat`,`agregat`.`users`.`ID_user` AS `ID_user` from ((`agregat`.`users` join `agregat`.`users-agregats`) join `agregat`.`agregats`) where ((`agregat`.`users`.`ID_user` = `agregat`.`users-agregats`.`User_ID`) and (`agregat`.`agregats`.`ID_agregat` = `agregat`.`users-agregats`.`Agregat_ID`))
