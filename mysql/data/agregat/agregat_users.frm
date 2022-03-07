TYPE=VIEW
query=select `agregat`.`users`.`ID_user` AS `ID_user`,`agregat`.`users`.`Username` AS `Username`,`agregat`.`agregats`.`ID_agregat` AS `ID_agregat`,`agregat`.`agregats`.`Name` AS `Name`,`agregat`.`agregats`.`Description` AS `Description`,`agregat`.`users-agregats`.`Role` AS `Role` from ((`agregat`.`users` join `agregat`.`users-agregats`) join `agregat`.`agregats`) where ((`agregat`.`users`.`ID_user` = `agregat`.`users-agregats`.`User_ID`) and (`agregat`.`agregats`.`ID_agregat` = `agregat`.`users-agregats`.`Agregat_ID`))
md5=0c42ee29f04a01bfd035cff986cdf598
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=1
with_check_option=0
timestamp=2022-02-24 20:39:51
create-version=1
source=select \n`users`.`ID_user` AS `ID_user`,\n`users`.`Username` AS `Username`,\n`agregats`.`ID_agregat` AS `ID_agregat`,\n`agregats`.`Name` AS `Name`,\n`agregats`.`Description` AS `Description`,\n`users-agregats`.`Role` AS Role\nfrom ((`users` join `users-agregats`) join `agregats`) where ((`users`.`ID_user` = `users-agregats`.`User_ID`) and (`agregats`.`ID_agregat` = `users-agregats`.`Agregat_ID`))
client_cs_name=utf8
connection_cl_name=utf8_general_ci
view_body_utf8=select `agregat`.`users`.`ID_user` AS `ID_user`,`agregat`.`users`.`Username` AS `Username`,`agregat`.`agregats`.`ID_agregat` AS `ID_agregat`,`agregat`.`agregats`.`Name` AS `Name`,`agregat`.`agregats`.`Description` AS `Description`,`agregat`.`users-agregats`.`Role` AS `Role` from ((`agregat`.`users` join `agregat`.`users-agregats`) join `agregat`.`agregats`) where ((`agregat`.`users`.`ID_user` = `agregat`.`users-agregats`.`User_ID`) and (`agregat`.`agregats`.`ID_agregat` = `agregat`.`users-agregats`.`Agregat_ID`))
