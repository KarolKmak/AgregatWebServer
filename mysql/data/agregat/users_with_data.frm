TYPE=VIEW
query=select `agregat`.`users`.`Username` AS `Username`,`agregat`.`users`.`Email` AS `Email`,`agregat`.`users`.`Description` AS `Description`,`agregat`.`users_data`.`Name` AS `Name`,`agregat`.`users_data`.`Surname` AS `Surname`,`agregat`.`users_data`.`Date_of_birth` AS `Date_of_birth`,`agregat`.`users_data`.`Adress` AS `Adress` from (`agregat`.`users` join `agregat`.`users_data`) where (`agregat`.`users`.`ID_user` = `agregat`.`users_data`.`ID_user_data`)
md5=358b4c56afe6860e563eb3fda2c16801
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2022-01-25 19:38:26
create-version=1
source=select \n`users`.`Username` AS `Username`,\n`users`.`Email` AS `Email`,\n`users`.`Description` AS `Description`,\n`users_data`.`Name` AS `Name`,\n`users_data`.`Surname` AS `Surname`,\n`users_data`.`Date_of_birth` AS `Date_of_birth`,\n`users_data`.`Adress` AS `Adress`\n\nfrom (`users` JOIN `users_data`) where (`users`.`ID_user` = `users_data`.`ID_user_data`)
client_cs_name=utf8
connection_cl_name=utf8_general_ci
view_body_utf8=select `agregat`.`users`.`Username` AS `Username`,`agregat`.`users`.`Email` AS `Email`,`agregat`.`users`.`Description` AS `Description`,`agregat`.`users_data`.`Name` AS `Name`,`agregat`.`users_data`.`Surname` AS `Surname`,`agregat`.`users_data`.`Date_of_birth` AS `Date_of_birth`,`agregat`.`users_data`.`Adress` AS `Adress` from (`agregat`.`users` join `agregat`.`users_data`) where (`agregat`.`users`.`ID_user` = `agregat`.`users_data`.`ID_user_data`)
